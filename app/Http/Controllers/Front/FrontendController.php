<?php

namespace App\Http\Controllers\Front;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function addToCart(Request $request){
        $request->validate([
            'productId'=> 'required',
            'userId'=> 'required',
            'price' =>'required'
        ]);
        //check user product
     
        // $product = Product::find($request->get('productId'));
        if(Cart::where('user_id',Auth::id())->where('product_id', $request->productId)->first()){
            Cart::where('product_id',$request->productId)->first()->increment('quantity');
            return response()->json([
                'title' => 'Success',
                'msg' => 'Product Quantity Updated Successfully',
                'items' => Cart::where('user_id', Auth::id())->sum('quantity')
            ]);
        }else{
            $cart = new Cart();
            $cart->product_id = $request->productId;
            // $cart->product_id = $product->id;
            $cart->user_id = $request->userId;
            $cart->quantity = 1;
            // $cart->price = $request->price;
            $cart->price = $request->price;
            $cart->save();
            return response()->json([
                'title' => 'Success',
                'msg' => 'Product Added Successfully',
                'items' =>Cart::where('user_id', Auth::id())->sum('quantity')
            ]);
        }
    }

    public function getTotalCartItem(){
        $cartItem = Cart::where('user_id', Auth::id())->sum('quantity');
        return response()->json([
            'cartItem' => $cartItem
        ]);
    }
    public function checkout(){
        return view('front.pages.checkout');
    }
}
