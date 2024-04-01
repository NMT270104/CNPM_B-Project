<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Nhanvien;
use App\Models\Banan;
use App\Models\Sanpham;
use App\Models\Cthd;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Home Admin";
        $viewData['cthds'] = Cthd::all();
        $viewData['employees'] = Nhanvien::all(); // Truy vấn tất cả dữ liệu nhân viên
        $viewData['tables'] = Banan::all();
        $viewData['products'] = Sanpham::all();
        return view ("Admin.index") -> with("viewData",$viewData);
    }

    public function add(Request $request){
    $validator = Validator::make($request->all(), [
        "MANV" => "required|",
        "MABAN"=> "required|",
        "TENBAN"=> "required|max:255",
        "MASP" => "required|max:255",
        "SL"=> "required|numeric|gt:0",
    ]);

    if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

    $nhanviens = Nhanvien::all();
    $banans = Banan::all();
    $sanphams = Sanpham::all();
    $cthds = Cthd::all();

    $newCTHD = new Cthd();
    $newCTHD->MANV = $request->input('MANV');
    $newCTHD->MABAN = $request->input('MABAN');
    $newCTHD->MASP = $request->input('MASP');
    $newCTHD->SL = $request->input('SL');

    $newCTHD->save();

    // Trả về view với dữ liệu mới
    return view('Admin.index', compact('nhanviens', 'banans', 'sanphams', 'cthds'));
}

}