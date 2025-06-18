<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class memberController extends Controller
{

    public function index()
    {
        return view('admin_panel.GMS.members');
    }




}
