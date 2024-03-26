<?php

namespace App\Http\Controllers\Admin;
use App\Models\Banan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTableController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Table Admin";
        $viewData['banans'] = Banan::all();
        return view ("Admin.table") -> with("viewData",$viewData);
    }

    public function add(Request $request)
    {
        $request->validate([
            "SOBAN" => "required|numeric|gt:0",
            "TRANGTHAI" => "required|max:255",
            "SONGUOI" => "required|numeric|gt:0",

        ]);
    
        $newBanan = new Banan();
        $newBanan->setSOBAN($request->input('SOBAN'));
        $newBanan->setTRANGTHAI($request->input('TRANGTHAI'));
        $newBanan->setSONGUOI($request->input('SONGUOI'));

        $newBanan->save();

        return back()->withSuccess('table added successfully!');
    }

    
    public function delete($manv){
        Banan::destroy($manv);
        return back();
    }

        public function edit($MANL) {
    $Banan = Banan::find($MANL);

    return view("Admin.product",compact('Banan'));
}

    public function update(Request $request, $MANL){
        $request->validate([
            "SOBAN" => "required|numeric|gt:0",
            "TRANGTHAI" => "required|max:255",
            "SONGUOI" => "required|numeric|gt:0",

        ]);

    
    $Banan = Banan::findOrFail($MANL);

    $Banan->update($request->all());

    return back()->with('success', 'Cập nhật ban an thành công!');
    
}


}
