@extends('template.dashboard')

@php
 $title = 'Data Siswa';
 $preTitle = 'Tambah Data'

@endphp

@section('content')

<div class="card">
    <div class="card-body">
       <form action="{{ route('sekolahs.store') }}" class="" method="post">
        @csrf
           <div class="mb-3">
                  <label class="form-label">Nama</label>
                     <input type="text" name="nama_sekolah" class="form-control"  placeholder="Tulis nama">
     </div>
     <div class="mb-3">
                  <label class="form-label">Alamat</label>
                     <input type="text" name="alamat_sekolah" class="form-control"  placeholder="Tulis alamat">
     </div>
     <div class="mb-3">
                  <label class="form-label">Jurusan</label>
                     <input type="text" name="jurusan" class="form-control"  placeholder="Tulis jurusan">
     </div>
     <div class="mb-3">
                  <label class="form-label">Nis</label>
                     <input type="text" name="nis" class="form-control"  placeholder="Tulis nis">
     </div>

    <div class="mb-3">
        <input type="submit" value="Simpan"  class="submit btn btn-primary">
    </div>
                 
</form>
    </div>
</div>  
@endsection                             

