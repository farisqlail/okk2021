@extends('admin.layouts')

@section('content-admin')

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Edit Pengumuman</h1>

        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Pengumuman</h6>
            </div>
            <div class="card-body">

                <form action="{{ route('pengumuman.update', ['pengumuman' => $pengumuman]) }}" method="POST"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-goup">
                        <label for="">Judul Pengumuman</label>
                        <input type="text" name="title" class="form-control" value="{{ $pengumuman->title }}" required>
                    </div><br>

                    <div class="form-goup">
                        <label for="">Category Pengumuman</label>
                        <input type="text" name="category" class="form-control" value="{{ $pengumuman->category }}">
                    </div><br>

                    <div class="form-group">
                        <label for="">Isi Pengumuman</label>
                        <textarea class="form-control" name="deskripsi" required rows="3" id="deskripsi">
                                @php
                                    echo $pengumuman->deskripsi;
                                @endphp
                            </textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary float-right" value="save" type="submit">Ubah</button>
                    </div>

                </form>

            </div>
        </div>


    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#deskripsi'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
