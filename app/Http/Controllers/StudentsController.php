<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    public function index(Request $request){

       if($request->has('search')){
        $data = Students::where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
       }else{
        $data = Students::paginate(5);
       }
        return view('datastudents', compact('data'));
    }
    public function tambahstudents(){
        return view('tambahdata');
    }

public function insertdata(Request $request){
    $data = Students::create($request->all());
    if($request->hasFile('foto')){
        $request->file('foto')->move('fotostudents/', $request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
    }

    return redirect()->route('students')->with('success', 'data siswa berhasil ditambahkan');
}

//id merupakan parameter yang diambil datastudents & untuk menampilkan data
public function tampilkandata($id) {
    $data = Students::find($id);
    //dd($data);
    return view('tampildata', compact('data'));
}

//untuk upd data berdasarkan id
public function updatedata(Request $request, $id){
    $data = Students::find($id);
    $data->update($request->all());
    return redirect()->route('students')->with('success', 'data siswa berhasil diupdate');
}

public function delete($id){
    $data = Students::find($id);
    $data->delete();
    return redirect()->route('students')->with('success', 'data siswa berhasil dihapus');
}

public function exportpdf(){
    $data = Students::all();

    view()->share('data', $data);
    $pdf = PDF::loadview('datastudents-pdf');
    return $pdf->download('data.pdf');
}

public function exportexcel(){
    return Excel::download(new StudentsExport, 'dataStudents.xlsx');
}

public function importexcel(Request $request){
    $data = $request->file('file');

    $namafile = $data->getClientOriginalName();
    $data->move('StudentsData', $namafile);

    Excel::import(new StudentsImport, \public_path('/StudentsData/'.$namafile));
    return \redirect()->back();
}
}

