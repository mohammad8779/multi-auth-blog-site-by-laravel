<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

class HomeController extends Controller
{
    
    public function index(){
      
      $posts = post::where('status',1)->paginate(2);
      return view('user.blog',compact('posts'));

    }

    public function tag(tag $tag){
      
      $posts = $tag->posts();
      return view('user.blog',compact('posts'));

    }

     public function category(category $category){
      
      $posts = $category->posts();
      return view('user.blog',compact('posts'));

    }
}
