@extends('template.dashboard')

@php
 $title = 'Data Siswa';
 $preTitle = 'Edit Data Siswa'

@endphp

@section('content')

<div class="card">
    <div class="card-body">
       <form action="{{ route('sekolahs.update',$sekolahs->id) }}" class="" method="post">
        @csrf 
        
        @method('PUT')          
        
           <div class="mb-3">
                  <label class="form-label">Nama</label>
                     <input type="text" name="nama_sekolah" class="form-control"  placeholder="Tulis nama" value="{{ $sekolahs->nama_sekolah}}">
     </div>
     <div class="mb-3">
                  <label class="form-label">Alamat</label>
                     <input type="text" name="alamat_sekolah" class="form-control"  placeholder="Tulis alamat" value="{{ $sekolahs->alamat_sekolah}}">
     </div>
     <div class="mb-3">
                  <label class="form-label">Jurusan</label>
                     <input type="text" name="jurusan" class="form-control"  placeholder="Tulis jurusan" value="{{ $sekolahs->jurusan}}">
     </div>
     <div class="mb-3">
                  <label class="form-label">Nis</label>
                     <input type="text" name="nis" class="form-control"  placeholder="Tulis nis" value="{{ $sekolahs->nis}}">
     </div>

    <div class="mb-3">
        <input type="submit" value="Simpan"  class="submit btn btn-primary">
    </div>
                 
</form>
    </div>
</div>  
@endsection                             
