<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminTableController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Table Admin";
        return view ("Admin.table") -> with("viewData",$viewData);
    }

}
