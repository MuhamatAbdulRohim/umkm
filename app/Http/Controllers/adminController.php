<?php

namespace App\Http\Controllers;

use App\banner;
use App\company;
use App\product;
use App\service;
use App\users;
use Carbon\Carbon;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $menu = 'profile';
        $company = company::where('id', 1)->first();
        $user = users::where('id', 1)->first();
        return view('admin.profile', compact('menu', 'company', 'user'));
    }

    public function changeAccount(Request $request)
    {
        $user = users::where('id', 1)->first();
        $user->email = $request->uname;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->update();
        return redirect('/adm');
    }

    public function changeProfile(Request $request)
    {
        $company = company::find(1)->first();
        $company->company_name = $request->company_name;
        $company->address = $request->address;
        $company->city = $request->city;
        $company->email = $request->email;
        $company->handphone = $request->handphone;
        $company->update();
        return back();
    }

    public function changeAdditionalProfile(Request $request)
    {
        $company = company::find(1)->first();
        $company->facebook_url = $request->facebook;
        $company->instagram_url = $request->instagram;
        $company->twitter_url = $request->twitter;
        $company->about_company = $request->about_company;
        $company->update();
        return back();
    }

    public function addGalery()
    {
        $menu = 'addgalery';
        $editProduct = 'tidak';
        $user = users::where('id', 1)->first();
        return view('admin.add_galery', compact('menu', 'editProduct', 'user'));
    }

    public function storeGalery(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'unit_price' => 'required|numeric',
            'description' => 'required',
            'image_url' => 'required|mimetypes:image/*|max:1024'
        ]);

        $product = new product();
        $product->product_name = $request->product_name;
        $product->unit_price = $request->unit_price;
        $product->description = $request->description;
        $product->created_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $product->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $product->save();

        $ext = $request->file('image_url')->getClientOriginalExtension();
        $name = 'pd_' . time() . '.' . $ext;

        if ($product) {
            $request->file('image_url')->move(public_path('admin/images/gallary/'), $name);
            $product->image_url = $name;
            $product->update();
        }

        return redirect(route('index.galery'));

    }

    public function myGalery()
    {
        $menu = 'mygalery';
        $products = product::where('id', '<>', 0)->simplePaginate(5);
        return view('admin.my_galery', compact('menu', 'products'));
    }

    public function editGalery($id)
    {
        $product = product::where('id', $id)->first();
        $menu = 'mygalery';
        $editProduct = 'ya';
        $user = users::where('id', 1)->first();
        return view('admin.add_galery', compact('menu', 'product', 'editProduct', 'user'));
    }

    public function updateGalery(Request $request)
    {
        //update
        if ($request->image_url == null) {
            $this->validate($request, [
                'product_id' => 'required|exists:products,id',
                'product_name' => 'required',
                'unit_price' => 'required|numeric',
                'description' => 'required',
            ]);
        } else {
            $this->validate($request, [
                'product_id' => 'required|exists:products,id',
                'product_name' => 'required',
                'unit_price' => 'required|numeric',
                'description' => 'required',
                'image_url' => 'required|mimetypes:image/*|max:1024'
            ]);
        }

        $product = product::where('id', $request->product_id)->first();
        $product->product_name = $request->product_name;
        $product->unit_price = $request->unit_price;
        $product->description = $request->description;
        $product->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $product->update();

        if ($request->image_url != null) {
            $ext = $request->file('image_url')->getClientOriginalExtension();
            $name = 'pd_' . time() . '.' . $ext;

            if ($product) {
                $request->file('image_url')->move(public_path('admin/images/gallary/'), $name);
                $product->image_url = $name;
                $product->update();
            }
        }

        return redirect(route('index.galery'));
    }

    public function delGalery($id)
    {
        $product = product::where('id', $id)->first();
        $product->delete();
        return back();
    }

    public function addService()
    {
        $menu = 'addservice';
        $editService = 'tidak';
        $user = users::where('id', 1)->first();
        return view('admin.add_service', compact('menu', 'editService', 'user'));
    }

    public function storeService(Request $request)
    {
        $service = new service();
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->created_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $service->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $service->save();

        return redirect('/adm/my_service');
    }

    public function myService()
    {
        $menu = 'myservice';
        $services = service::where('id', '<>', 0)->simplePaginate(5);
        $user = users::where('id', 1)->first();
        return view('admin.my_service', compact('menu', 'services', 'user'));
    }

    public function editService($id)
    {
        $menu = 'myservice';
        $editService = 'ya';
        $service = service::where('id', $id)->first();
        $user = users::where('id', 1)->first();
        return view('admin.add_service', compact('menu', 'editService', 'service', 'user'));
    }

    public function updateService(Request $request)
    {
        $service = service::where('id', $request->service_id)->first();
        $service->service_name = $request->service_name;
        $service->description = $request->description;
        $service->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $service->update();

        return redirect('/adm/my_service');
    }

    public function delService($id)
    {
        $service = service::where('id', $id)->first();
        $service->delete();
        return back();
    }

    public function mySlide()
    {
        $menu = 'slider';
        $user = users::where('id', 1)->first();
        return view('admin.slider', compact('menu', 'user'));
    }

    public function updateSlide(Request $request)
    {
        if ($request->image_url == null) {
            $this->validate($request, [
                'id' => 'required|exists:banners,id',
                'title' => 'required',
                'sub_title' => 'required',
            ]);
        } else {
            $this->validate($request, [
                'id' => 'required|exists:banners,id',
                'title' => 'required',
                'sub_title' => 'required',
                'image_url' => 'required|mimetypes:image/*|max:1024'
            ]);
        }

        $banners = banner::where('id', $request->id)->first();
        $banners->title = $request->title;
        $banners->sub_title = $request->sub_title;
        $banners->updated_at = Carbon::now('Asia/Jakarta')->toDateTimeString();
        $banners->update();

        if ($request->image_url != null) {
            $ext = $request->file('image_url')->getClientOriginalExtension();
            $name = 'bn_' . time() . '.' . $ext;

            if ($banners) {
                $request->file('image_url')->move(public_path('master/img'), $name);
                $banners->image_url = $name;
                $banners->update();
            }
        }

        return back();
    }

}
