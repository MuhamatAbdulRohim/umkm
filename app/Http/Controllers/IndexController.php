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
        $product = product::where('id' , '<>', 0)->simplePaginate(9);
        $service = service::where('id' , '<>', 0)->simplePaginate(3);
        return view('index', compact('banner', 'company', 'product', 'service'));
    }
}
