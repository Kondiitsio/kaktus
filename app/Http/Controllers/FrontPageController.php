<?php
namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Product;

class FrontPageController extends Controller
{
    public function index()
    {
        $products = Product::with('media')->get();

        $hero = Hero::first();
        return view('frontPage', ['hero' => $hero, 'products' => $products]);
    }
}
?>
