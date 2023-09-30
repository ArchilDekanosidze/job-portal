<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class AdminBannerController extends Controller
{
    public function index()
    {
        $banner_data = Banner::where('id',1)->first();
        return view('admin.banner', compact('banner_data'));
    }

    public function update(Request $request) 
    {

        $obj = Banner::where('id',1)->first();

        if($request->hasFile('banner_job_listing')) {
            $request->validate([
                'banner_job_listing' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_job_listing);
            $ext = $request->file('banner_job_listing')->extension();
            $final_name = 'banner_job_listing'.'.'.$ext;
            $request->file('banner_job_listing')->move('uploads/',$final_name);
            $obj->banner_job_listing = $final_name;
        }

        if($request->hasFile('banner_job_detail')) {
            $request->validate([
                'banner_job_detail' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_job_detail);
            $ext = $request->file('banner_job_detail')->extension();
            $final_name = 'banner_job_detail'.'.'.$ext;
            $request->file('banner_job_detail')->move('uploads/',$final_name);
            $obj->banner_job_detail = $final_name;
        }

        if($request->hasFile('banner_job_categories')) {
            $request->validate([
                'banner_job_categories' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_job_categories);
            $ext = $request->file('banner_job_categories')->extension();
            $final_name = 'banner_job_categories'.'.'.$ext;
            $request->file('banner_job_categories')->move('uploads/',$final_name);
            $obj->banner_job_categories = $final_name;
        }

        if($request->hasFile('banner_company_listing')) {
            $request->validate([
                'banner_company_listing' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_company_listing);
            $ext = $request->file('banner_company_listing')->extension();
            $final_name = 'banner_company_listing'.'.'.$ext;
            $request->file('banner_company_listing')->move('uploads/',$final_name);
            $obj->banner_company_listing = $final_name;
        }

        if($request->hasFile('banner_company_detail')) {
            $request->validate([
                'banner_company_detail' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_company_detail);
            $ext = $request->file('banner_company_detail')->extension();
            $final_name = 'banner_company_detail'.'.'.$ext;
            $request->file('banner_company_detail')->move('uploads/',$final_name);
            $obj->banner_company_detail = $final_name;
        }

        if($request->hasFile('banner_pricing')) {
            $request->validate([
                'banner_pricing' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_pricing);
            $ext = $request->file('banner_pricing')->extension();
            $final_name = 'banner_pricing'.'.'.$ext;
            $request->file('banner_pricing')->move('uploads/',$final_name);
            $obj->banner_pricing = $final_name;
        }

        if($request->hasFile('banner_blog')) {
            $request->validate([
                'banner_blog' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_blog);
            $ext = $request->file('banner_blog')->extension();
            $final_name = 'banner_blog'.'.'.$ext;
            $request->file('banner_blog')->move('uploads/',$final_name);
            $obj->banner_blog = $final_name;
        }

        if($request->hasFile('banner_post')) {
            $request->validate([
                'banner_post' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_post);
            $ext = $request->file('banner_post')->extension();
            $final_name = 'banner_post'.'.'.$ext;
            $request->file('banner_post')->move('uploads/',$final_name);
            $obj->banner_post = $final_name;
        }

        if($request->hasFile('banner_faq')) {
            $request->validate([
                'banner_faq' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_faq);
            $ext = $request->file('banner_faq')->extension();
            $final_name = 'banner_faq'.'.'.$ext;
            $request->file('banner_faq')->move('uploads/',$final_name);
            $obj->banner_faq = $final_name;
        }

        if($request->hasFile('banner_contact')) {
            $request->validate([
                'banner_contact' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_contact);
            $ext = $request->file('banner_contact')->extension();
            $final_name = 'banner_contact'.'.'.$ext;
            $request->file('banner_contact')->move('uploads/',$final_name);
            $obj->banner_contact = $final_name;
        }

        if($request->hasFile('banner_terms')) {
            $request->validate([
                'banner_terms' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_terms);
            $ext = $request->file('banner_terms')->extension();
            $final_name = 'banner_terms'.'.'.$ext;
            $request->file('banner_terms')->move('uploads/',$final_name);
            $obj->banner_terms = $final_name;
        }

        if($request->hasFile('banner_privacy')) {
            $request->validate([
                'banner_privacy' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_privacy);
            $ext = $request->file('banner_privacy')->extension();
            $final_name = 'banner_privacy'.'.'.$ext;
            $request->file('banner_privacy')->move('uploads/',$final_name);
            $obj->banner_privacy = $final_name;
        }

        if($request->hasFile('banner_signup')) {
            $request->validate([
                'banner_signup' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_signup);
            $ext = $request->file('banner_signup')->extension();
            $final_name = 'banner_signup'.'.'.$ext;
            $request->file('banner_signup')->move('uploads/',$final_name);
            $obj->banner_signup = $final_name;
        }

        if($request->hasFile('banner_login')) {
            $request->validate([
                'banner_login' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_login);
            $ext = $request->file('banner_login')->extension();
            $final_name = 'banner_login'.'.'.$ext;
            $request->file('banner_login')->move('uploads/',$final_name);
            $obj->banner_login = $final_name;
        }

        if($request->hasFile('banner_forget_password')) {
            $request->validate([
                'banner_forget_password' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_forget_password);
            $ext = $request->file('banner_forget_password')->extension();
            $final_name = 'banner_forget_password'.'.'.$ext;
            $request->file('banner_forget_password')->move('uploads/',$final_name);
            $obj->banner_forget_password = $final_name;
        }

        if($request->hasFile('banner_company_panel')) {
            $request->validate([
                'banner_company_panel' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_company_panel);
            $ext = $request->file('banner_company_panel')->extension();
            $final_name = 'banner_company_panel'.'.'.$ext;
            $request->file('banner_company_panel')->move('uploads/',$final_name);
            $obj->banner_company_panel = $final_name;
        }

        if($request->hasFile('banner_candidate_panel')) {
            $request->validate([
                'banner_candidate_panel' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            unlink('uploads/'.$obj->banner_candidate_panel);
            $ext = $request->file('banner_candidate_panel')->extension();
            $final_name = 'banner_candidate_panel'.'.'.$ext;
            $request->file('banner_candidate_panel')->move('uploads/',$final_name);
            $obj->banner_candidate_panel = $final_name;
        }

        $obj->update();

        return redirect()->back()->with('success', 'Data is updated successfully.');
    }
}
