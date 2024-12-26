<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     // Create Post
     public function CreatePost(Request $request)
     {
         // validate input
         $validatedData = $request->validate([
             'title' => 'required',
             'content' => 'required',
         ]);

         // create post object
         $Post = new Post();
         $Post->title = $validatedData['title'];
         $Post->content = $validatedData['content'];
         $Post->save();
         
         // return response
         return response()->json([
             'Body' => $Post,
         ]);
     }

     // Read Post by ID
     public function ReadPost($id)
     {
         $Post = Post::find($id);
         return response()->json([
             'Body' => $Post,
         ]);
     }
     // Read All Post
     public function PostAll()
     {
         $Posts = Post::all();
         return response()->json([
             'Body' => $Posts,
         ]);
     }
}
