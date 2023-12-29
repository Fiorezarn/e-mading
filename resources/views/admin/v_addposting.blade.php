<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}//img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
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
                            <h1 class="m-0">Add Posting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <form action="/posting/insert" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label for="">Judul Posting</label>
                                        <input name="title" class="form-control" value="{{ old('title') }}">
                                        <div class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
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
                                        <label for="">Isi Posting</label>
                                        <input name="story" class="form-control" value="{{ old('story') }}">
                                        <div class="text-danger">
                                            @error('story')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Category</label>
                                        <input name="category" class="form-control" value="{{ old('category') }}">
                                        <div class="text-danger">
                                            @error('category')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <a href="/posting" class="btn btn-danger btn-sm">Close</a>
                                        <button class="btn btn-primary btn-sm">Save</button>
                                    </div>
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
</body>

</html>
