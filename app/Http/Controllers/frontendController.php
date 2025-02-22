<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Banner;
use App\Models\OrderItem;
use App\Models\AttributeCategory;
use Illuminate\Support\Facades\DB;

class frontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(5)->get();
        $banners = Banner::all();
        $categories = Category::all();
        $hide_price = session('hide_price', false); // Default true hoga

        //$categories = Category::with(['subcategories','brands'])->get();
        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.index',compact('products', 'attributeCategories', 'banners','hide_price','categories') ,['title' => 'Errothrone Internationol']);
    }
    public function about()
    {
       $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.about',compact('attributeCategories'),['title' => 'About Us']);
    }
    public function store()
    {
        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();$categories = Category::with(['subcategories'])->orderBy('sort_order', 'ASC')->get();
        return view('frontend.shop',compact('attributeCategories'),['title' => 'Our Store']);
    }
    public function contact()
    {
       $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.contact',compact('attributeCategories'),['title' => 'Contact Us']);
    }
    public function product_detail($id)
    {

        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        $product = Product::find($id);
        return view('frontend.shop-detail',compact('product','attributeCategories'),['title' => $product->name]);
    }
    public function show_category($category_name)
    {

        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        $products = Product::whereHas('categories', function($query) use ($category_name) {
            $query->where('name', $category_name);
        })->get();
        return view('frontend.shop',compact('products','attributeCategories','category_name'),['title' => $category_name]);
    }
    public function show_sub_category($sub_category_name)
    {
        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        
        $products = Product::whereHas('subCategories', function($query) use ($sub_category_name) {
            $query->where('name', $sub_category_name);
        })->get();
        return view('frontend.sub_cat_shop', compact('products', 'attributeCategories', 'sub_category_name'), ['title' => $sub_category_name]);
    }
    public function shop_page()
    {
         $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.shop', compact ('attributeCategories'), ['title' => "shop"]);
    }
}
