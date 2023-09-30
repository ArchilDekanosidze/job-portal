<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;
use App\Models\JobCategory;
use App\Models\JobLocation;
use App\Models\Job;
use App\Models\WhyChooseItem;
use App\Models\Testimonial;
use App\Models\Post;

class HomeController extends Controller
{
    public function index() 
    {
        $home_page_data = PageHomeItem::where('id',1)->first();
        $job_categories = JobCategory::withCount('rJob')->orderBy('r_job_count','desc')->take(9)->get();
        $all_job_categories = JobCategory::orderBy('name','asc')->get();
        $all_job_locations = JobLocation::orderBy('name','asc')->get();
        $why_choose_items = WhyChooseItem::get();
        $testimonials = Testimonial::get();
        $posts = Post::orderBy('id','desc')->take(3)->get();
        $featured_jobs = Job::with('rCompany','rJobCategory','rJobLocation','rJobType','rJobExperience','rJobGender','rJobSalaryRange')->orderBy('id','desc')->where('is_featured',1)->get();
        
        return view('front.home', compact('home_page_data','job_categories','all_job_categories','all_job_locations','why_choose_items','testimonials','posts','featured_jobs'));
    }
}
