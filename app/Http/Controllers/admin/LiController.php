<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LiController extends Controller
{
    //后台首页
    public function li()
    {
        return view("admin.li");
    }
    
}
