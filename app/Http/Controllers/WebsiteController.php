<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.home');
    }

    public function showpost($id)
    {
        $post = Post::find($id);
        $related = Post::where('category_id',$post->category_id)
        ->whereNot('id',$id)
        ->orderBy('id', 'asc')
        ->take(3)
        ->get();
        $comments = Comment::where('approved',1)->where('post_id', $id)->get();
        return view('website.post',compact('post','related','comments'));
    }

    public function showcategory($categoryid)
    {
        $posts = Post::where('category_id',$categoryid)->get();
        $category = Category::where('id',$categoryid)->first();
        return view('website.category',compact('posts','category'));
    }
    // public function showcomments()
    // {
    //     $comments = Comment::where('approved',1)->get();
    //     return view('website.post',compact('comments'));
    // }
    public function search(Request $request)
    {
     
            $posts = Post::where('title','like', '%'.$request->search.'%')
            ->orWhere('details','like', '%'.$request->search.'%')
            ->latest()
            ->get();
            return view("website.search",compact('posts'));

    }

    
}
