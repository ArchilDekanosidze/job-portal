<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageFaqItem;

class AdminFaqPageController extends Controller
{
    public function index()
    {
        $page_faq_data = PageFaqItem::where('id',1)->first();
        return view('admin.page_faq', compact('page_faq_data'));
    }

    public function update(Request $request) 
    {

        $faq_page_data = PageFaqItem::where('id',1)->first();

        $request->validate([
            'heading' => 'required'
        ]);

        $faq_page_data->heading = $request->heading;
        $faq_page_data->title = $request->title;
        $faq_page_data->meta_description = $request->meta_description;
        $faq_page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
