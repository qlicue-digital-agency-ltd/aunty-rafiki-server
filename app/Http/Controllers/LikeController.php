<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LikeController extends Controller
{

    public function isLikedByMe($postId, $userId)
    {
        $allUsers = User::all();
        $user = User::find($userId);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $post = Post::findOrFail($postId)->first();
        $number_of_likes = Like::wherePostId($post->id);
        $collection = Like::all();
        $filtered_collection = $collection->filter(function ($item) use ($postId) {
            if ($item->post_id == $postId)

                return $item;
        })->values();

        $users = array();

        foreach ($filtered_collection as $items) {

            $user = User::find($items->user_id);

            array_push($users, $user);
        }

        $rate = round(count($filtered_collection) / count($allUsers)) * 5 > 0 ? round(count($filtered_collection) / count($allUsers)) * 5 : 1;
        if ((Like::whereUserId($userId)->wherePostId($postId)->exists()) && Like::whereNull('deleted_at')) {
            return response()->json([
                'status' => true,
                'count' => count($filtered_collection),
                'likes' => $filtered_collection,
                'users' => $users,
                'rate' => $rate
            ], 200);
        }


        return response()->json([
            'status' => false,
            'count' => count($filtered_collection),
            'likes' => $filtered_collection,
            'users' => $users,
            'rate' => $rate
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    public function getUsersWhoLikedPost($postId)
    {
        $post = Post::find($postId);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $likes = Like::wherePostId($postId)->get();
        foreach ($likes as $like) {
            $like->user;
        }

        return response()->json([
            'likes' => $likes
        ], 200, [], JSON_NUMERIC_CHECK);
    }


    public function postLike(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_id' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {

            return response()->json(['message' => $validator->errors()], 404);
        }

        $existing_like = Like::withTrashed()->wherePostId($request->input('post_id'))->whereUserId($request->input('user_id'))->first();

        if (is_null($existing_like)) {

            $like = Like::create([
                'post_id' => $request->input('post_id'),
                'user_id' => $request->input('user_id')
            ]);


            return response()->json([
                'status' => 'liked',
                'like' => $like
            ], 200, [], JSON_NUMERIC_CHECK);
        } else {
            if (is_null($existing_like->deleted_at)) {
                $existing_like->delete();

                return response()->json([
                    'status' => 'disliked',
                    'like' => $existing_like
                ], 201, [], JSON_NUMERIC_CHECK);
            } else {
                $existing_like->restore();

                return response()->json([
                    'status' => 'liked',
                    'like' => $existing_like
                ], 200, [], JSON_NUMERIC_CHECK);
            }
        }
    }
}
