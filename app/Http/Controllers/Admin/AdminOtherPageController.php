<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageOtherItem;

class AdminOtherPageController extends Controller
{
    public function index()
    {
        $page_other_data = PageOtherItem::where('id',1)->first();
        return view('admin.page_other', compact('page_other_data'));
    }

    public function update(Request $request) 
    {

        $other_page_data = PageOtherItem::where('id',1)->first();

        $request->validate([
            'login_page_heading' => 'required',
            'signup_page_heading' => 'required',
            'forget_password_page_heading' => 'required',
            'job_listing_page_heading' => 'required',
            'company_listing_page_heading' => 'required'
        ]);

        $other_page_data->login_page_heading = $request->login_page_heading;
        $other_page_data->login_page_title = $request->login_page_title;
        $other_page_data->login_page_meta_description = $request->login_page_meta_description;
        $other_page_data->signup_page_heading = $request->signup_page_heading;
        $other_page_data->signup_page_title = $request->signup_page_title;
        $other_page_data->signup_page_meta_description = $request->signup_page_meta_description;
        $other_page_data->forget_password_page_heading = $request->forget_password_page_heading;
        $other_page_data->forget_password_page_title = $request->forget_password_page_title;
        $other_page_data->forget_password_page_meta_description = $request->forget_password_page_meta_description;
        $other_page_data->job_listing_page_heading = $request->job_listing_page_heading;
        $other_page_data->job_listing_page_title = $request->job_listing_page_title;
        $other_page_data->job_listing_page_meta_description = $request->job_listing_page_meta_description;
        $other_page_data->company_listing_page_heading = $request->company_listing_page_heading;
        $other_page_data->company_listing_page_title = $request->company_listing_page_title;
        $other_page_data->company_listing_page_meta_description = $request->company_listing_page_meta_description;
        $other_page_data->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
