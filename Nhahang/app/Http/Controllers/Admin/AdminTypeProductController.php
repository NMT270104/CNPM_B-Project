<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTypeProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Type Product Admin";
        return view ("Admin.typeproduct") -> with("viewData",$viewData);
    }
}
