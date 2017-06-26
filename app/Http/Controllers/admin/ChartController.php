<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{
    //后台首页
    public function chart()
    {
        return view("admin.chart");
    }
    
}
