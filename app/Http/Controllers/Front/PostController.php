<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PageBlogItem;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::orderBy('id','desc')->paginate(6);
        $blog_page_item = PageBlogItem::where('id',1)->first();
        return view('front.blog', compact('posts','blog_page_item'));
    }

    public function detail($slug)
    {
        $post_single = Post::where('slug',$slug)->first();
        $post_single->total_view = $post_single->total_view+1;
        $post_single->update();
        return view('front.post', compact('post_single'));
    }
}
