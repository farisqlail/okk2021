@extends('admin.layouts')

@section('content-admin')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Galeri</h1>
            <a href="{{ route('galeriAdmin.create') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Galeri</a>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="tableGaleri">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Gambar</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($galeri as $glr)
                                <tr>
                                    <td>{{ $glr->title }}</td>
                                    <td><a href="{{ $glr->link }}">Link {{ $glr->title }}</a></td>
                                    <td align="center">
                                        <img src="{{ asset('storage/' . $glr->image) }}" height="90px">
                                    </td>
                                    <td align="center">
                                        <a href="{{ route('galeriAdmin.edit', $glr->id) }}"
                                            class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>

                                        <a href="{{ route('galeri.delete', $glr->id) }}"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('script')

    <script>
        $(document).ready(function() {
            $('#tableGaleri').DataTable();
        });

    </script>

@endpush
