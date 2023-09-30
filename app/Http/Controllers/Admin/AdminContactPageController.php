<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageContactItem;

class AdminContactPageController extends Controller
{
    public function index()
    {
        $page_contact_data = PageContactItem::where('id',1)->first();
        return view('admin.page_contact', compact('page_contact_data'));
    }

    public function update(Request $request) 
    {

        $contact_page_data = PageContactItem::where('id',1)->first();

        $request->validate([
            'heading' => 'required',
            'map_code' => 'required'
        ]);

        $contact_page_data->heading = $request->heading;
        $contact_page_data->map_code = $request->map_code;
        $contact_page_data->title = $request->title;
        $contact_page_data->meta_description = $request->meta_description;
        $contact_page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
