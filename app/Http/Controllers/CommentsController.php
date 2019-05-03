<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{
    public function NewComment(Request $request){
        $this->validate($request, [
            'post_id' => 'required',
            'Name' => 'required',
            'Comment' => 'required|max:300',
        ]);

        $Comment = new Comments;
        $Comment->content = $request->input('Comment');
        $Comment->name = $request->input('Name');
        $Comment->post_id = $request->input('post_id');
        $Comment->save();
        return redirect()->back()->with('status', 'Comment as been added');
    }
}
