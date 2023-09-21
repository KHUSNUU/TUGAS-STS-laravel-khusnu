<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekolah;

class sekolahsController extends Controller
{
  public function index()
  {
    return view('sekolahs.index', [
    'sekolahs' => sekolah::get()  
    ]);     
  }
  public function create()
{ 
  return view('sekolahs.create');
}
 public function store(Request $request) {
  
$sekolahs = new Sekolah();

$sekolahs->nama_sekolah = $request->nama_sekolah;
$sekolahs->alamat_sekolah = $request->alamat_sekolah;
$sekolahs->jurusan = $request->jurusan;
$sekolahs->nis = $request->nis;

$sekolahs->save();

return redirect()->route('sekolahs.index');

 }

 public function edit($id)
{

   $sekolahs = sekolah::find($id); 

   return view('sekolahs.edit', [

    'sekolahs' => $sekolahs,
   ]);

}

public function update(request $request, $id)

{
  $sekolahs = Sekolah::find($id);

$sekolahs->nama_sekolah = $request->nama_sekolah;
$sekolahs->alamat_sekolah = $request->alamat_sekolah;
$sekolahs->jurusan = $request->jurusan;
$sekolahs->nis = $request->nis;

$sekolahs->save();

return redirect()->route('sekolahs.index');
}
public function destory($id)
{
  $sekolahs = Sekolah::find($id);

  $sekolahs-> delete(); 

  return redirect()->route('sekolahs.index'); 

  
}
  
}



