<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageTermItem;

class AdminTermPageController extends Controller
{
    public function index()
    {
        $page_term_data = PageTermItem::where('id',1)->first();
        return view('admin.page_term', compact('page_term_data'));
    }

    public function update(Request $request) 
    {

        $term_page_data = PageTermItem::where('id',1)->first();

        $request->validate([
            'heading' => 'required',
            'content' => 'required'
        ]);

        $term_page_data->heading = $request->heading;
        $term_page_data->content = $request->content;
        $term_page_data->title = $request->title;
        $term_page_data->meta_description = $request->meta_description;
        $term_page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
