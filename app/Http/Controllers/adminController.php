<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function index(){
        $menu = 'profile';
        return view('admin.profile', compact('menu'));
    }

    public function addGalery(){
        $menu = 'addgalery';
        return view('admin.add_galery', compact('menu'));
    }

    public function myGalery(){
        $menu = 'mygalery';
        return view('admin.my_galery', compact('menu'));
    }

    public function addService(){
        $menu = 'addservice';
        return view('admin.add_service', compact('menu'));
    }

    public function myService(){
        $menu = 'myservice';
        return view('admin.my_service', compact('menu'));
    }

    public function mySlide(){
        $menu = 'slider';
        return view('admin.slider', compact('menu'));
    }

}
