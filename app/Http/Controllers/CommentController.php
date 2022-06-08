<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'author' => 'string|required',
            'body' => 'required|max:255',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
        ]);

        $Comment = new Comment([
            'author' => $validatedData['author'],
            'body' => $validatedData['body'],
            'commentable_id' => $validatedData['commentable_id'],
            'commentable_type' => $validatedData['commentable_type'],
        ]);
        $Comment->save();

        return redirect()->back();
    }
}
