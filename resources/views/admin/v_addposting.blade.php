<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

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
                </div><!-- /.container-fluid -->
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-sm-6">
                        <form id="postingForm" action="/posting/insert" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="title">Judul Posting</label>
                                <input name="title" id="title" class="form-control" value="{{ old('title') }}">
                                <div class="text-danger">
                                    @error('title')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="picture">Gambar</label>
                                <input type="file" name="picture" id="picture" class="form-control">
                                <div class="text-danger">
                                    @error('picture')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="story">Isi Posting</label>
                                <textarea class="form-control" id="story" name="story">{{ old('story') }}</textarea>
                                <div class="text-danger">
                                    @error('story')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="category">Category</label>
                                <input name="category" id="category" class="form-control"
                                    value="{{ old('category') }}">
                                <div class="text-danger">
                                    @error('category')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <button id="buttonSave" class="btn btn-primary btn-sm">Save</button>
                            </div>
                        </form>
                        <div class="form-group">
                            <button id="buttonCancel" class="btn btn-danger btn-sm">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.wrapper -->

        @include('admin.footer')
        @include('admin.script')

        <script>
            $(document).ready(function() {
                $('#story').summernote();

                $('#buttonCancel').on('click', function() {
                    var title = $('#title').val();
                    var story = $('#story').summernote('code');
                    var category = $('#category').val();
                    var formData = new FormData($('#postingForm')[0]);
                    formData.append('_token', "{{ csrf_token() }}");

                    if (title.length > 0 || story.length > 0 || category.length > 0) {
                        $.ajax({
                            type: 'POST',
                            url: '/posting/draf',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                console.log(response);
                            },
                            error: function(error) {
                                console.error(error);
                            }
                        });
                    } else {
                        window.location.href = '/posting';
                    }
                });
            });
        </script>
</body>

</html>
