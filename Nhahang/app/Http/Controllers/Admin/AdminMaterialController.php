<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminMaterialController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Material Admin";
        return view ("Admin.material") -> with("viewData",$viewData);
    }

}
