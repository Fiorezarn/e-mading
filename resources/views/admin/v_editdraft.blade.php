<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('adminLTE/dist') }}//img/adminLTELogo.png" alt="adminLogo" height="60"
                width="60">
        </div> --}}

        @include('admin.navbar')

        @include('admin.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Add Product</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form action="/posting/update/{{ $posting->id }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Id</label>
                                        <input name="id" class="form-control" value="{{ $posting->id }}" readonly>
                                        <div class="text-danger">
                                            @error('id')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama posting</label>
                                        <input name="title" class="form-control" value="{{ $posting->title }}">
                                        <div class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Isi Posting</label>
                                        <textarea class="form-control" id="story" name="story">{{ $posting->story }}</textarea>
                                        <div class="text-danger">
                                            @error('story')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-sm 12">
                                        <div class="col-sm-4">
                                            <img src="{{ url('posting_img/' . $posting->picture) }}" width="150px">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gambar</label>
                                        <input type="file" name="picture" class="form-control">
                                        <div class="text-danger">
                                            @error('picture')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Kategori</label>
                                        <input name="category" class="form-control" value="{{ $posting->category }}">
                                        <div class="text-danger">
                                            @error('category')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <a href="/draft" class="btn btn-danger btn-sm">Close</a>
                                        <button class="btn btn-primary btn-sm">Save</button>
                                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </div>
    </div>

    </div>
    @include('admin.footer')


    @include('admin.script')
    <script>
        $(document).ready(function() {
            $('#story').summernote();
        });
    </script>
</body>

</html>
