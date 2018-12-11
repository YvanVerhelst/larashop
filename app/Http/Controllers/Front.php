<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Brand;
use App\Category;
use App\Product;


class Front extends Controller
{

var $brands;
var $categories;
var $products;
var $title;
var $description;

    public function __construct(){
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->products = Product::all(array('id','name','price'));
    }
    public function index(){
    	return view('home',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'home', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function products(){
        return view('products',array('title' => 'Products listing', 'description'=>'lorem ipsum', 'page'=> 'products', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function product_details($id){
        $product = Product::find($id);
        return view('product_details',array('product' => $product, 'title' => $product->name, 'description'=>$product->description, 'page'=> 'products', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function product_categories($name){
        return view('products',array('title' => 'Products listing', 'description'=>'lorem ipsum', 'page'=> 'products', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function product_brands($name, $category = null){
        return view('products',array('title' => 'Products listing', 'description'=>'lorem ipsum', 'page'=> 'products', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function blog(){
        return view('blog',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'blog', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function blog_post($id){
        return view('blog_post',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'blog', 'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products));
    }
    public function contact_us(){
        return view('contact_us',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'contact_us'));
    }
    public function login(){
        return view('login',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'home'));
    }
    public function logout(){
        return view('logout',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'home'));
    }
    public function checkout(){
        return view('checkout',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'home'));
    }
    public function cart(){
        return view('cart',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'home'));
    }
    public function search($query){
        return view('products',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=> 'products'));
    }
}
