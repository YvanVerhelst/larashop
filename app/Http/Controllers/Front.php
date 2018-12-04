<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Front extends Controller
{
    public function index(){
    	return view('home');
    }
    public function products(){
    	return view('products');
    }
    public function product_details($id){
    	return view('products_detail');
    }
    public function product_categorie(){
    	return 'product brands page';
    }
    public function blog(){
    	return view('blog');
    }
    public function blog_post($id){
    	return view ('blog_post');
    }
    public function contact_us(){
    	return view ('contact_us');
    }
    public function login(){
    	return view ('login');
    }
    public function logout(){
    	return 'logout';
    }
    public function checkout(){
    	return view ('checkout');
    }
    public function cart(){
    	return view ('cart');
    }
    public function search($query){
    	return "$query search pagina";
    }
}
