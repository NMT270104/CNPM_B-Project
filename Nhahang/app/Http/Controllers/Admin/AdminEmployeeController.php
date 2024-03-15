<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class AdminEmployeeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData['title'] = "Admin page - Employee Admin";
        $viewData['nhanviens'] = Employee::all();
        return view ("Admin.employee") -> with("viewData",$viewData);
    }
}