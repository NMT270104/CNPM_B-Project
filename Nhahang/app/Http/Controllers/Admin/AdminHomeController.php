<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Home Admin";
        return view ("Admin.index") -> with("viewData",$viewData);
    }
}