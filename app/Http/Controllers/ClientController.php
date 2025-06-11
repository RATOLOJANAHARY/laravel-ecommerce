<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;

class ClientController extends Controller
{
    public function home()
    {
        $sliders = slider::All()->where('status', 1);
        $products = product::All()->where('status', 1);

        return view('client.home')->with('sliders', $sliders)->with('products', $products);
    }
    public function shop()
    {
        $categories = Category::All();
        $products = product::All()->where('status', 1);

        return view('client.shop')->with('categories', $categories)->with('products', $products);
    }
    public function cart()
    {
        return view('client.cart');
    }
    public function checkout()
    {
        return view('client.checkout');
    }
    public function login()
    {
        return view('client.login');
    }
    public function signup()
    {
        return view('client.signup');
    }
    public function orders()
    {
        return view('admin.orders');
    }
}
