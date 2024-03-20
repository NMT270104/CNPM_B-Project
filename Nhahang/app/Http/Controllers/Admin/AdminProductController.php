<?php

namespace App\Http\Controllers\Admin;
use App\Models\Sanpham;
use App\Models\Loaisp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Sanpham Admin";
        $viewData['sanphams'] = Sanpham::all();
        $viewData['loaisps'] = Loaisp::all(); // Lấy tất cả các loại sản phẩm để hiển thị trong dropdown menu
        return view ("Admin.product") -> with("viewData",$viewData);
    }
    public function add(Request $request)
    {
        $request->validate([
            "TENSP" => "required|max:255",
            "MALOAISP" => "required|max:255",
            "DVT" => "required|max:255",
            "GIA" => "required|numeric|gt:0",
            "MOTA" => "required",
            'IMAGE' => 'image',
        ]);
        
        $loaisps = Loaisp::all(); // Lấy tất cả các loại sản phẩm để hiển thị trong dropdown menu
        
        $newSanpham = new Sanpham();
        $newSanpham->setTENSP($request->input('TENSP'));
        $newSanpham->setMALOAISP($request->input('MALOAISP'));
        $newSanpham->setDVT($request->input('DVT'));
        $newSanpham->setGIA($request->input('GIA'));
        $newSanpham->setMOTA($request->input('MOTA'));
        $newSanpham->setIMAGE("no image");

        $newSanpham->save();

        if ($request->hasFile('IMAGE')) {
            $imageName = $newSanpham->getMASP().".".$request->file('IMAGE')->extension();
            Storage::disk('public')->put($imageName,
            file_get_contents($request->file('IMAGE')->getRealPath())
            );
            $newSanpham->setImage($imageName);
            $newSanpham->save();
        }

        return back()->withSuccess('Product added successfully!');
    }

    
    public function delete($manv){
        Sanpham::destroy($manv);
        return back();
    }

        public function edit($MANV) {
    $Sanpham = Sanpham::find($MANV);

    return view("Admin.product",compact('Sanpham'));
}

    public function update(Request $request, $MASP){
        $request->validate([
            "TENSP" => "required|max:255",
            "MALOAISP" => "required|max:255",
            "DVT" => "required|max:255",
            "GIA" => "required|numeric|gt:0",
            "MOTA" => "required",
            'IMAGE' => 'image',
        ]);

    
    $Sanpham = Sanpham::findOrFail($MASP);

    $Sanpham->update($request->all());

    return back()->with('success', 'Cập nhật sản phẩm thành công!');
    
}

}
