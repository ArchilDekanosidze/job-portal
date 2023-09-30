<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\PagePricingItem;

class PricingController extends Controller
{
    public function index() 
    {
        $packages = Package::get();
        $pricing_page_item = PagePricingItem::where('id',1)->first();
        return view('front.pricing', compact('packages','pricing_page_item'));
    }
}
