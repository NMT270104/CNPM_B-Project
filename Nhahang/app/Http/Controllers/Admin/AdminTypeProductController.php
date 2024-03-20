<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Loaisp;
use Illuminate\Http\Request;

class AdminTypeProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Type Product Admin";
        $viewData['loaisps'] = Loaisp::all();
        return view ("Admin.typeproduct") -> with("viewData",$viewData);
    }

    public function add(Request $request)
{
        $request-> validate([
        // "MALOAISP" => "required|",
        "TENLOAISP" => "required|max:255",

    ]);
    // Check if the new TENLOAISP already exists in the database
    if (Loaisp::where('TENLOAISP', $request->TENLOAISP)->exists()) {
        return back()->withErrors(['TENLOAISP' => 'Tên loại sản phẩm đã tồn tại.'])->withInput();
    }
    else {
    $newLoaisp = new Loaisp();
    // $newLoaisp->MALOAISP = $request->input('MALOAISP');
    $newLoaisp->TENLOAISP = $request->input('TENLOAISP');
    $newLoaisp->save();
    return back();
    }
}



    public function delete($MALOAISP){
        Loaisp::destroy($MALOAISP);
        return back();
    }

        public function edit($MALOAISP) {
    $Loaisp = Loaisp::find($MALOAISP);
    return view("Admin.typeproduct",compact('Loaisp'));
}

    public function update(Request $request, $TENLOAISP){
    $request->validate([
        // "MALOAISP" => "required|",
        "TENLOAISP" => "required|max:255",
    ]);

    // Check if the new TENLOAISP already exists in the database
    if (Loaisp::where('TENLOAISP', $request->TENLOAISP)->where('TENLOAISP', '!=', $TENLOAISP)->exists()) {
        return back()->withErrors(['TENLOAISP' => 'Tên loại sản phẩm đã tồn tại.']);
    }
    else {
    $Loaisp = Loaisp::findOrFail($TENLOAISP);

    $Loaisp->update($request->all());

    return back()->with('success', 'Cập nhật loại sản phẩm thành công!');
    }
}
//check MALOAISP already exists in the database realtime
public function checkTENLOAI(Request $request)
{
    if ($request->ajax()) {
        $TENLOAISP = $request->TENLOAISP;
        $exists = Loaisp::where('TENLOAISP', $TENLOAISP)->exists();
        return response()->json(['exists' => $exists]);
    }
}

}
