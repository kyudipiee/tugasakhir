<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use App\Models\Students;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class StudentsController extends Controller
{
    public function index(Request $request){

       if($request->has('search')){
        $data = Students::with('users')->where('nama', 'LIKE', '%' .$request->search.'%')->paginate(5);
       }else{
        $data = Students::with('users')->paginate(5);
       }
        return view('datastudents', compact('data'));
    }

    public function tambahstudents(){
        return view('tambahdata');
    }

    //bagaimana menambahkan data siswa
    public function insertdata(Request $request){
        // validasi
        $this->validate($request,[
            'nisn' => 'required|unique:students|max:25',
            'telp_students' => 'required|unique:students|min:11|max:12',
        ]);


        $data = Students::create($request->all());
        $data->user_id = Auth::user()->id;
        $data->save();

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
    return redirect()->route('students')->with(['success' => 'data siswa berhasil diupdate']);


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

public function indexs (){
    return view ('indexs');
}

public function tablestudents (){
        $data = Students::all();
        return view('tablestudents');
}

 // datauser merupakan halaman yangberisi table user
 public function userdata (){
    $data = User::paginate(5);
    return view('datauser', compact('data'));
}

// edituser merupakan halaman yang berisi form edit data tersebut
public function tampilkandatauser($id){

    $data = User::find($id);
    return view('edituser',compact('data'));
}

// setelah melakukan oengeditan data maka akan diarakan ke datauser/table yang berisi data pada user
public function updatedatauser(Request $request, $id){
    // membuat method untuk mengupdate data
    $data = User::find($id);
    $data->update($request->all());

    return redirect()->route('userdata')->with('success', 'data berhasil diubah');
}

public function deleteuser($id){
    $data = User::find($id);
    $data->delete();
    return redirect()->route('userdata')->with('success', 'data siswa berhasil dihapus');
}




}


