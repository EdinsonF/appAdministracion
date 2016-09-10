<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class adminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('admin', ['only'=>['create', 'destroy','edit']]);

    }
    public function index(){
    	return view('Admin.adminInicio');
    }
}
