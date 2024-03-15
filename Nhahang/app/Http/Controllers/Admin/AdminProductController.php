<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Product Admin";
        return view ("Admin.product") -> with("viewData",$viewData);
    }
}
