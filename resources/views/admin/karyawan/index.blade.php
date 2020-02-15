@extends('templates/template-admin')

@section('title', 'Daftar Karyawan')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col">
            <a href="{{url('/createkaryawan')}}" class="btn btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Karyawan</a>
        </div>
    </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Data Karyawan</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($karyawan as $k)
                    <tr align="center">
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $k->nip }}</td>
                      <td>{{ $k->nama }}</td>
                      <td>{{ $k->jenkel }}</td>
                      <td>{{ $k->email }}</td>
                      <td>{{ $k->id_role }}</td>
                      <td>
                        <a href="{{url('/detailkaryawan')}}/{{$k->id}}" class="btn btn-primary btn-sm"><i class="fa fa-search-plus"></i> Detail</a>
                        <a href="{{url('/ubahkaryawan')}}/{{$k->id}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i> Edit</a>
                        <form action="{{ url('/hapuskaryawan') }}/{{$k->id}}" method="POST" class="d-inline">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                        </form>
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

      </div>

@endsection