<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhanvien;
use Illuminate\Support\Facades\Storage;

class AdminEmployeeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Employee Admin";
        $viewData['nhanviens'] = Nhanvien::all();
        return view ("Admin.employee") -> with("viewData",$viewData);
    }

    public function add(Request $request)
    {
        $request->validate([
        "MANV" => "required",
        "HOTEN" => "required|max:255",
        "SDT" => "required|numeric",
        'CHUCVU' => 'required',
        //
        ]);
        $newNhanvien = new Nhanvien();
        $newNhanvien->setMANV($request->input('MANV'));
        $newNhanvien->setHOTEN($request->input('HOTEN'));
        $newNhanvien->setSDT($request->input('SDT'));
        $newNhanvien->setCHUCVU($request->input('CHUCVU'));

        $newNhanvien->save();
        return back();
    }
    public function delete($id){
        Nhanvien::destroy($id);
        return back();
    }
    public function update(Request $request, $id){
        $request->validate([
            "MANV" => "required|max:255",
            "HOTEN" => "required|max:255",
            "SDT" => "required|numeric",
            'CHUCVU' => 'required',
            //
            ]);
            $newNhanvien = new Nhanvien();
            $newNhanvien->setMANV($request->input('MANV'));
            $newNhanvien->setHOTEN($request->input('HOTEN'));
            $newNhanvien->setSDT($request->input('SDT'));
            $newNhanvien->setCHUCVU($request->input('CHUCVU'));
        
            $newNhanvien->save();
        return redirect()->route('admin.employee');
        
    }
}