@extends('admin.layouts')

@section('content-admin')

     <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Tambah Galeri</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Galeri</h6>
            </div>
            <div class="card-body">

            <form action="{{ route('galeriAdmin.store') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <div class="form-goup">
                        <label for="">Keterangan Foto</label>
                            <input type="text" name="title" class="form-control" placeholder="Judul foto / video" required>
                    </div><br>

                    <div class="form-goup">
                        <label for="">Link untuk video</label>&nbsp;<span class="text-danger"><i>*Catatan kalau cuma upload foto tidak usah diisi!</i></span>
                            <input type="text" name="link" class="form-control" placeholder="Link video ..">
                    </div><br>
                    
                    <div class="form-group">
                        <label for="">Thumbnail Galeri</label>
                        <input type="file" class="form-control-file" required name="image" id="">
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Tambah</button>
                    </div>
                   
                </form>

            </div>
        </div>

    </div>

@endsection