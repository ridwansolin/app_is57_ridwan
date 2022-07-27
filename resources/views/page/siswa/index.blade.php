@extends('layouts.master')

@section('title', 'Data siswa')
@section('navsiswa', 'active')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>



<div class="container  bg-white mt-3 p-4">
    {{-- <h1>Data Jurusan</h1> --}}
    <a href="/siswa/form" class="btn btn-primary">Tambah Data</a>
    <br>
    <br>
    <div class="card">
        <div class="card-header">
            DATA SISWA
        </div>
        <div class="card-body">
            <table id="example2"  class="table table-bordered">
                <thead> 
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIPD</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">J/K</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">TGL LAHIR</th>
                    <th scope="col">T LAHIR</th>
                    <th scope="col">AGAMA</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($sis as $item)
                        <tr>
                            <th scope="row">{{$nomor++}}</th>
                            <td>{{$item->nim}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->kelas->nama_kelas}}</td>
                            <td>{{$item->tanggal_lahir}}</td>
                            <td>{{$item->tempat_lahir}}</td>
                            <td>{{$item->agama}}</td>
                            <td>
                                <a href="/siswa/edit/{{$item->id}}" class="btn btn-success btn-sm">edit</a>
                                
                              


    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}">Hapus</button>
  
<!-- Modal -->
<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmasi !!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          yakin Data siswa <b>{{$item->nama}}</b> ingin dihapus?
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <form method="POST" action="/siswa/{{$item->id}}">
          @csrf
          @method ('DELETE')

      <button type="submit" class="btn btn-danger ">Hapus</button>
          </form>
      </div>
    </div>
  </div>
</div>

                                </td>
                            </tr>
                        
                            @empty
                        <tr>
                            <td colspan="4">Belum Ada Data</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
                                @endsection