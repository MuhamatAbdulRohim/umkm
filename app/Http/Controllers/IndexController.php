<?php

namespace App\Http\Controllers;

use App\banner;
use App\company;
use App\product;
use App\service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $banner = banner::all();
        $company = company::where('id', 1)->first();
        $product = product::all();
        $service = service::all();
        return view('index', compact('banner', 'company', 'product', 'service'));
    }
}
