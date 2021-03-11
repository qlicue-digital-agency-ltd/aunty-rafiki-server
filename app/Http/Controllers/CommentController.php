<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function getComments(Request $request)
    {
        $comments = Comment::all();
        foreach ($comments as $comment) {

            $comment->post;
            $comment->time = $comment->created_at->diffForHumans();
            $comment->user;
        }
        $response = ['comments' => $comments];
        return response()->json($response, 200, [], JSON_NUMERIC_CHECK);
    }
    public function getComment($commentId)
    {

        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }


        return response()->json(['comment' => $comment], 200, [], JSON_NUMERIC_CHECK);
    }
    public function postComment(Request $request

    )
    {
        $validator = Validator::make($request->all(), [

            'body' => 'required',
            'user_id' => 'required',
            'post_id' => 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 404);
        }



        $user = User::find($request->user_id);

        if (!$user) {
            return response()->json(['message' => 'user not found'], 404);
        }

        $post = Post::find($request->post_id);

        if (!$post) {
            return response()->json(['message' => 'post not found'], 404);
        }

        $comment = new Comment();

        $comment->body = $request->body;
        $comment->post_id = $request->post_id;

        $user->comments()->save($comment);

        return response()->json(['comment' => $comment], 200, [], JSON_NUMERIC_CHECK);
    }
    public function putComment(Request $request, $commentId)
    {
        $validator = Validator::make($request->all(), [
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 404);
        }
        $comment = Comment::find($commentId);
        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }

        $comment->update([
            'body' => $request->body,

        ]);

        return response()->json(['comment' => $comment], 200, [], JSON_NUMERIC_CHECK);
    }

    public function deleteComment($commentId)
    {
        $comment = Comment::find($commentId);

        if (!$comment) {
            return response()->json(['message' => 'comment not found'], 404);
        }

        $comment->delete();
        return response()->json(['message' => 'comment deleted successfully'], 200);
    }
}
