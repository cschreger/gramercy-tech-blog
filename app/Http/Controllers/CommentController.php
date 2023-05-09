<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\BlogPost;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request, $id)
    {
        $request->merge([
            'post_id' => intval($id),
            'author_id' => Auth::user()->id
        ]);
        Comment::create($request->all());
        return back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit($postId, $commentId)
    {
        $post = BlogPost::find($postId);
        $comment = Comment::find($commentId);
        if ($comment->author != Auth::user()) return back();
        return view('comments.edit', compact('post', 'comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentRequest $request, $postId, $commentId)
    {
        $comment = Comment::find($commentId);
        if ($comment->author != Auth::user()) return back();
        $request->merge([
            'post_id' => intval($postId),
            'author_id' => Auth::user()->id
        ]);
        $comment->update($request->all());
        $comment->save();
        return redirect("/posts/$postId");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy($postId, $commentId)
    {
        $comment = Comment::find($commentId);
        $comment->delete();
        return redirect("/posts/$postId");
    }
}
