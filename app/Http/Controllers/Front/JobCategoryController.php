<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\PageJobCategoryItem;

class JobCategoryController extends Controller
{
    public function categories()
    {
        $job_category_page_item = PageJobCategoryItem::where('id',1)->first();
        $job_categories = JobCategory::withCount('rJob')->orderBy('r_job_count','desc')->get();
        return view('front.job_categories', compact('job_categories','job_category_page_item'));
    }
}
