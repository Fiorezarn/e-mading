<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        {{-- <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('adminLTE/dist') }}//img/adminLogo.png" alt="adminLogo" height="60"
                widtd="60">
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
                            <h1 class="m-0">Detail Posting</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <table class="table">
                <tr>
                    <th width="100px">Title</th>
                    <th width="30px">:</th>
                    <th>{{ $posting->title }}</th>
                </tr>
                <tr>
                    <th width="100px">Isi Posting</th>
                    <th width="30px">:</th>
                    <th>{{ $posting->story }}</th>
                </tr>
                <tr>
                    <th width="100px">Kategori</th>
                    <th width="30px">:</th>
                    <th>{{ $posting->category }}</th>
                </tr>
                <tr>
                    <th width="100px">Gambar</th>
                    <th width="30px">:</th>
                    <th><img src="{{ url('posting_img/', $posting->picture) }}" width="100px"></th>
                </tr>
                <tr>
                    <th><a href="/posting" class="btn btn-success btn-sm">Back</a></th>
                </tr>
            </table>
        </div>

    </div>
    @include('admin.footer')

    @include('admin.script')
</body>

</html>
