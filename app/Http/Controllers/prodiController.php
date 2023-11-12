<?php

namespace App\Http\Controllers;

use App\Models\Prodi; 
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class prodiController extends Controller
{
   public function index(){
      $data['allDataProdi'] = Prodi::all();
      return view('backend.prodi.view_prodi', $data);
   }

   public function create(){
      return view('backend.prodi.add_prodi');
   }

   public function store(Request $request){
      $data = new Prodi();
      $data->kodeProdi = $request->kodeProdi;
      $data->namaProdi = $request->namaProdi;
      $data->jenjang = $request->jenjang;
      $data->save();
      return redirect()->route('prodi.view');
   }

   public function edit($id){
      $editProdi = Prodi::find($id);
      return view('backend.prodi.edit_prodi', compact('editProdi'));
   }

   public function update(Request $request, $id){
      $data = Prodi::find($id);
      $data->kodeProdi = $request->kodeProdi;
      $data->namaProdi = $request->namaProdi;
      $data->jenjang = $request->jenjang;
      $data->save();
      return redirect()->route('prodi.view');
   }

   public function delete($id){
      $deleteData = Prodi::find($id);
      $deleteData->delete();
      return redirect()->route('prodi.view');
   }
}
