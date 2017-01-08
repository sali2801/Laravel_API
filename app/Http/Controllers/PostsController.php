<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Posts Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the display of posts. The controller expose 
	| the GET method in a RESTful endpoint in JSON and HTML.
    |
    */
    
    
   /* Return all the rows from the posts table. Columns are : Id, title, body, author.
   ** The data is casted to json.
   ** To access this go to http://localhost:8000/api/posts */
   public function index(){
    $posts= DB::table('posts')->select('id', 'title','body','author')->get();
    return $posts;
  }

   /* Return HTML page that diplays the post with specified Id.
   ** To access this go to http://localhost:8000/api/posts/{id}
   ** If the specified ID doesn't exist: return an error page.*/
   public function show($id){
    $post= Post::find($id);
    if(!$post){
      return view('posts.error',['id' => $post['id']]);
    } 
    return view('posts.post',['id' => $post['id'],'title'=> $post['title'],'body' => $post['body'],'author' => $post['author']]);
  }
  
}
