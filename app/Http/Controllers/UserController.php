<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Students;
use App\Exports\StudentsExport;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function tambahdataasstudent()
    {
        return view('front.tambahdataasstudent');
    }

    //bagaimana menambahkan data siswa
    public function insertdatauser(Request $request)
    {
        // validasi
        $this->validate($request, [
            'nama' => 'required',
            'nisn' => 'required|unique:students|max:12|min:12',
            'tempat' => 'required',
            'ttl' => 'required',
            'jk' => 'required',
            'telp_students' => 'required|unique:students|min:11|max:12',
            'alamat' => 'required',
            'jurusan' => 'required',
            'tanggal_test' => 'required|date|after_or_equal:today|before_or_equal:2024-02-27',

        ]);


        $data = Students::create($request->all());
        $data->user_id = Auth::user()->id;
        $data->save();

        return redirect()->route('paymentstudents')->with('success', 'data siswa berhasil ditambahkan');
    }
}
