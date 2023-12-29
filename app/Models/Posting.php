<?php

// App\Models\Posting.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Posting extends Model
{
    protected $table = 'postings';

    public function allData()
    {
        return DB::table('postings')->get();
    }
    public function detailData($id)
    {
        return DB::table('postings')->where('id', $id)->first();
    }
    public function addData($data)
    {
        return DB::table('postings')->insert($data);
    }
    public function editData($id, $data)
    {
        return DB::table('postings')->where('id', $id)->update($data);
    }
    public function deleteData($id)
    {
        DB::table('postings')
            ->where('id', $id)
            ->delete();
    }
}
