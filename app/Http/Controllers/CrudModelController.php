<?php

namespace App\Http\Controllers;

use App\Models\CrudModel;
use Illuminate\Http\Request;

class CrudModelController extends Controller
{
   public function index(){
    return view('form.formpage');
   }
   public function insert(Request $request){
    $insertdata = new CrudModel();
    $insertdata->name = $request->name;
    $insertdata->email = $request->email;
    $insertdata->password = $request->password;
    $insertdata->save();

    if ($insertdata) {
   echo 'data insert';
    }else{
      echo 'sorray';
    }
    return redirect()->back();
   }
   public function showdata(){
    $showdata = CrudModel::all();
    return view('form.showdata',compact('showdata'));
   }

   public function deletedata($id){
    $deletedata = CrudModel::find($id);
    $deletedata->delete();
    return redirect()->back();

   }
   public function edit($id){
    $edit = CrudModel::find($id);
    return view('form.edit',compact('edit'));   

   }


   public function update(Request $request,$id){

    $update = CrudModel::find($id);
    $update->name = $request->name;
    $update->email = $request->email;
    $update->password = $request->password;
    $update->save();
    if ($update) {
        echo 'update success';
    }else{
        echo 'sorray';
    }
    
   }
   
}
