<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->Posting = new Posting();
        $this->User = new User();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'posting' => $this->Posting->where('status', 1)->get()
        ];
        return view('welcome', $data);
    }

    public function detailPosting($id)
    {
        if (!$this->Posting->detailData($id)) {
            abort(404);
        }
        $data = [
            'posting' => $this->Posting->detailData($id),
        ];
        return view('detail_posting', $data);
    }

    public function admin()
    {
        $data = [
            'totalAdmin' => $this->User->where('level', 1)->get()->count(),
            'totalUser' => $this->User->where('level', 2)->get()->count(),
            'totalPosting' => $this->Posting->get()->count()
        ];
        return view('admin.admin', $data);
    }

    public function posting()
    {
        $data = [
            'posting' => $this->Posting->where('status', 1)->get()
        ];
        return view('admin.v_dataposting', $data);
    }

    public function draft()
    {
        $data = [
            'posting' => $this->Posting->where('status', 0)->get()
        ];
        return view('admin.v_draftposting', $data);
    }

    public function detail($id)
    {
        if (!$this->Posting->detailData($id)) {
            abort(404);
        }
        $data = [
            'posting' => $this->Posting->detailData($id),
        ];
        return view('admin.v_detailposting', $data);
    }

    public function addPosting()
    {
        return view('admin.v_addposting');
    }

    public function insertposting()
    {
        Request()->validate([
            'title' => 'required',
            'story' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,webp|max:1000',
            'category' => 'required',
        ], [
            'title.required' => 'wajib diisi !!',
            'story.required' => 'wajib diisi !!',
        ]);

        //upload photo
        $file = Request()->picture;
        $fileName = Request()->title . '.' . $file->extension();
        $file->move(public_path('posting_img'), $fileName);

        $data = [
            'title' => Request()->title,
            'story' => Request()->story,
            'picture' => $fileName,
            'category' => Request()->category,
            'status' => 1,
        ];

        $this->Posting->addData($data);
        return redirect()->route('posting')->with('pesan', 'Data Berhasil Di Tambahkan !!');
    }

    public function edit($id)
    {
        if (!$this->Posting->detailData($id)) {
            abort(404);
        }
        $data = [
            'posting' => $this->Posting->detailData($id),
        ];
        return view('admin.v_editposting', $data);
    }

    public function editdraft($id)
    {
        if (!$this->Posting->detailData($id)) {
            abort(404);
        }
        $data = [
            'posting' => $this->Posting->detailData($id),
        ];
        return view('admin.v_editdraft', $data);
    }

    public function update($id)
    {
        Request()->validate([
            'title' => 'required',
            'story' => 'required',
            'picture' => 'required|mimes:jpg,jpeg,png,webp|max:1000',
            'category' => 'required',
        ], [
            'title.required' => 'wajib diisi !!',
            'story.required' => 'wajib diisi !!',
        ]);

        //jika validasi tidak ada maka lakukan simpan data
        if (Request()->picture <> "") {
            //jika ingin ganti foto
            //upload photo
            $file = Request()->picture;
            $fileName = Request()->title . '.' . $file->extension();
            $file->move(public_path('posting_img'), $fileName);

            $data = [
                'title' => Request()->title,
                'story' => Request()->story,
                'picture' => $fileName,
                'category' => Request()->category,
            ];

            $this->Posting->editData($id, $data);
        } else {
            //jika tidak ingin ganti foto
            $data = [
                'title' => Request()->title,
                'story' => Request()->story,
                'category' => Request()->category,
            ];
            $this->Posting->editData($id, $data);
        }
        return redirect()->route('posting')->with('pesan', 'Data Berhasil Di Update !!');
    }

    public function insertdraft()
    {
        // Check if the 'picture' file is present in the request
        if (Request()->hasFile('picture')) {
            // Upload photo
            $file = Request()->picture;
            $fileName = Request()->title . '.' . $file->extension();
            $file->move(public_path('posting_img'), $fileName);
        } else {
            $fileName = null; // or provide a default file name or handle it accordingly
        }

        $data = [
            'title' => Request()->title,
            'story' => Request()->story,
            'picture' => $fileName,
            'category' => Request()->category,
            'status' => 0,
        ];

        $this->Posting->addData($data);
        return response()->json(['message' => 'Data successfully saved as draft.'], 200);
        return redirect()->route('posting')->with('pesan', 'Data Berhasil Di Update !!');
    }

    public function delete($id)
    {
        //hapus foto
        $posting = $this->Posting->detailData($id);
        if ($posting->picture <> "") {
            unlink(public_path('posting_img') . '/' . $posting->picture);
        }
        $this->Posting->deleteData($id);
        return redirect()->route('posting')->with('pesan', 'Data Berhasil Di Hapus !!');
    }
}
