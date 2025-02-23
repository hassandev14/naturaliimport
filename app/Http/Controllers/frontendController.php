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
use App\Models\Brand;
use Illuminate\Support\Facades\DB;

class frontendController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(12)->get();
        $banners = Banner::all();
        $categories = Category::all();
        $brands = Brand::all();
        //$categories = Category::with(['subcategories','brands'])->get();
        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.index',compact('products', 'attributeCategories', 'banners','brands','categories') ,['title' => 'Errothrone Internationol']);
    }
    public function cart_page($id)
    {
        $category = Category::with('products')->find(1);
        $products = $category ? $category->products : collect();        
        $attributeCategories = AttributeCategory::with(['categories', 'attribute', 'subCategories', 'brands'])->get();
        return view('frontend.shop',compact('attributeCategories','products'),['title' => 'About Us']);
    }
}
