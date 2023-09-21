@extends('template.dashboard')

@php
 $title = 'Data Siswa';
 $preTitle = 'Semua Data'

@endphp

@push('page-action')
<a href="{{ route ('sekolahs.create') }}"  class="btn btn-primary">Tambah Data</a>

@endpush


@section('content')
<div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Nama Sekolah</th>
                          <th>Alamat</th>
                          <th>Jurusan</th>
                          <th>Nis</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                     </tbody>
                     @foreach ($sekolahs as $sekolahs)
                     <tr>
                        <td>{{$sekolahs -> nama_sekolah}} </td>
                        <td>{{$sekolahs -> alamat_sekolah}} </td>
                         <td>{{$sekolahs -> jurusan}} </td>
                        <td>{{$sekolahs -> nis}} </td>
                        <td>
                            <a href="{{ route('sekolahs.edit',$sekolahs->id) }}">Edit</a>

                             <form action="{{route('sekolahs.destroy',$sekolahs->id) }}" method="post">

                             @csrf
                             @method('DELETE')

                             <input type="submit" value="Hapus" class="btn btn-danger btn-sn">
                             


                             </form>
                             
                        </td>
                        </tr>
                        @endforeach
                     </tbody>
                    </table>
                  </div>
                </div>
@endsection
