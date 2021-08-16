@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Pengumuman</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Pengumuman</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('pengumumanAdmin.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-goup">
                        <label for="">Judul Pengumuman</label>
                            <input type="text" name="title" class="form-control" placeholder="Pengumuman pertama .." required>
                    </div><br>

                    <div class="form-goup">
                        <label for="">Category Pengumuman</label>
                            <input type="text" name="category" class="form-control" placeholder="Tugas/Pengumuman/Berita">
                    </div><br>
                    
                    <div class="form-group">
                        <label for="">Isi Pengumuman</label>
                        <textarea class="form-control" name="content" required rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>

    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content', options );
    </script>
@endsection
