<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{

    private $comment;
    public function __construct(Comment $comment) {
        $this->comment = $comment;
    }

    public function store(Request $request) {
        $this->comment->create([
            "post_id"=>$request->postagem,
            "comment"=>$request->comment,
            "name"=>auth()->user()->name,
            "email"=>auth()->user()->email
            ]);  
        return redirect()->route("home");
    }
}

