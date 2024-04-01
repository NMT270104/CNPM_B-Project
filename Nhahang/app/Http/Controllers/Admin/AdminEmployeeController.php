<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhanvien; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
class AdminEmployeeController extends Controller
{
    public function index() {
    $viewData = [];
    $viewData['title'] = "Admin page - Employee Admin";
    $viewData['nhanviens'] = Nhanvien::all();
    return view("Admin.employee")->with("viewData", $viewData);
}

public function add(Request $request)
{
    $validator = Validator::make($request->all(), [
        "MANV" => "required|unique:nhanviens,MANV",
        "HOTEN" => "required|max:255",
        "SDT" => "required|numeric",
        'CHUCVU' => 'required',
    ]);

    // Check if the new MANV already exists in the database
    if (Nhanvien::where('MANV', $request->MANV)->exists()) {
        return back()->withErrors(['MANV' => 'Mã nhân viên đã tồn tại.'])->withInput();
    }
    else {
    $newNhanvien = new Nhanvien();
    $newNhanvien->MANV = $request->input('MANV');
    $newNhanvien->HOTEN = $request->input('HOTEN');
    $newNhanvien->SDT = $request->input('SDT');
    $newNhanvien->CHUCVU = $request->input('CHUCVU');

    $newNhanvien->save();
    return back();
    }
}



    public function delete($manv){
        Nhanvien::destroy($manv);
        return back();
    }

        public function edit($MANV) {
    $nhanvien = Nhanvien::find($MANV);
    // $viewData = [
    //     'nhanvien' => $nhanvien,
    //     // Các dữ liệu khác nếu cần
    // ];
    // return view("Admin.employee")->with("viewData", $viewData);
    return view("Admin.employee",compact('nhanvien'));
}

    public function update(Request $request, $MANV){
    $request->validate([
        "MANV" => "required|",
        "HOTEN" => "required|max:255",
        "SDT" => "required|numeric",
        'CHUCVU' => 'required',
    ]);

    // Check if the new MANV already exists in the database
    if (Nhanvien::where('MANV', $request->MANV)->where('MANV', '!=', $MANV)->exists()) {
        return back()->withErrors(['MANV' => 'Mã nhân viên đã tồn tại.']);
    }
    else {
    $nhanvien = Nhanvien::findOrFail($MANV);

    $nhanvien->update($request->all());

    return back()->with('success', 'Cập nhật nhân viên thành công!');
    }
}
//check Manv already exists in the database realtime
public function checkMANV(Request $request)
{
    if ($request->ajax()) {
        $manv = $request->MANV;
        $exists = Nhanvien::where('MANV', $manv)->exists();
        return response()->json(['exists' => $exists]);
    }
}

}
