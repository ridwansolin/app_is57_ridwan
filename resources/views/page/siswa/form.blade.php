@extends('layouts.master')

@section('title', 'Tambah Data siswa')
@section('navkelas', 'active')

@section('content')


<div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
    
    <div class="card">
        <div class="card-header">
            Form Tambah Data Siswa
        </div>
        <div class="card-body">
            <form method="post" action="/siswa/store">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIPD</label>
                    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">NAMA</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>

                        
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                  <br>
                  <input type="radio" name="jk" value="L" >Laki-laki
                  <input type="radio" name="jk" value="P" >Perempuan
              </div>

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kelas</label>
                <select name="kelas" class="form-control">
                    <option value="">-Pilih Kelas-</option>
                    @foreach ($kelas as $item)
                        <option value="{{$item->id}}">{{$item->nama_kelas}}</option>  
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal" class="form-control">
          </div>

          
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat" class="form-control">
        </div>



        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Agama</label>
          <select name="agama" class="form-control">
              <option value="">-Pilih Agama-</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
          </select>
      </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                <a href="/siswa" class="btn btn-warning">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection