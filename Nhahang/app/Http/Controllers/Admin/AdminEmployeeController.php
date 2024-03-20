<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nhanvien;
use Illuminate\Support\Facades\Storage;

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
    public function delete($MANV){
        Nhanvien::destroy($MANV);
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
        "MANV" => "required|max:255",
        "HOTEN" => "required|max:255",
        "SDT" => "required|numeric",
        'CHUCVU' => 'required',
    ]);

    $nhanvien = Nhanvien::findOrFail($MANV);

    $nhanvien->update($request->all());

    return redirect()->back()->with('success','Employee updated successfully.'); 
}
}
