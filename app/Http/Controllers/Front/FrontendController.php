<?php

namespace App\Http\Controllers\Front;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $data['furniture_products'] = Product::where('status',1)->whereBetween('id',[1,10])->get()->toArray();
        $data['decorative_products'] = Product::where('status',1)->whereBetween('id',[11,20])->get()->toArray();
        $data['lighting_products'] = Product::where('status',1)->whereBetween('id',[21,30])->get()->toArray();
        $data['outdoor_products']= Product::where('status',1)->whereBetween('id',[31,40])->get()->toArray();
        $data['storage_products']= Product::where('status',1)->whereBetween('id',[41,50])->get()->toArray();
        return view('front.pages.home', compact('data'));
        
    }
}
