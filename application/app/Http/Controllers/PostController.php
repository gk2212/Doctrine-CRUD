<?php

namespace App\Http\Controllers;

use Core\Application\Contracts\IPostService;
use Illuminate\Http\Request;

class PostController extends Controller
{

    private IPostService $post;

    function __construct(IPostService $post)
    {
        $this->post = $post;
    }
    
    
    public function create()
    {
        return view('createPost');
    }
   

    public function createPost(Request $request)
    {
        $title = $request->input('title');
        $text = $request->input('text');
      
        $this->post->createPost($title, $text);
        return redirect('/post');
    }

    
    public function findPosts()
    {
        dd($this->post->findPosts());
    }


    public function findPostById($id)
    {
        dd( $this->post->getPostById($id) );
    }

    
    public function deletePost($id)
    {
        $this->post->deletePost($id);
        return redirect('/');
    }



}
