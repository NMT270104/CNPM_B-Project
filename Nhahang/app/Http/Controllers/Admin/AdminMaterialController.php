<?php

namespace App\Http\Controllers\Admin;
use App\Models\Nguyenlieu;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminMaterialController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Material Admin";
        $viewData['nguyenlieus'] = Nguyenlieu::all();
        return view ("Admin.material") -> with("viewData",$viewData);
    }

    public function add(Request $request)
    {
        $request->validate([
            "TENNL" => "required|max:255",
            "DVT" => "required|max:255",
            "LOAI" => "required|max:255",
            "GIA" => "required|numeric|gt:0",
            "MOTA" => "required",

        ]);
    
        $newNguyenlieu = new Nguyenlieu();
        $newNguyenlieu->setTENNL($request->input('TENNL'));
        $newNguyenlieu->setLOAI($request->input('LOAI'));
        $newNguyenlieu->setDVT($request->input('DVT'));
        $newNguyenlieu->setGIA($request->input('GIA'));
        $newNguyenlieu->setMOTA($request->input('MOTA'));


        $newNguyenlieu->save();

        return back()->withSuccess('Material added successfully!');
    }

    
    public function delete($manv){
        Nguyenlieu::destroy($manv);
        return back();
    }

        public function edit($MANL) {
    $Nguyenlieu = Nguyenlieu::find($MANL);

    return view("Admin.product",compact('Nguyenlieu'));
}

    public function update(Request $request, $MANL){
        $request->validate([
            "TENNL" => "required|max:255",
            "DVT" => "required|max:255",
            "LOAI" => "required|max:255",
            "GIA" => "required|numeric|gt:0",
            "MOTA" => "required",

        ]);

    
    $Nguyenlieu = Nguyenlieu::findOrFail($MANL);

    $Nguyenlieu->update($request->all());

    return back()->with('success', 'Cập nhật nguyen lieu thành công!');
    
}

}
