<?php

namespace App\Http\Controllers;

use App\Like;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function getPosts(Request $request)
    {
        $posts = Post::all()->sortByDesc('id')->values();

        $posts->load('likes', 'user', 'user.profile', 'comments', 'comments.user');
        foreach ($posts as $post) {

            $post->time = $post->created_at->diffForHumans();

            $post->likes_count = count($post->likes);
            $post->image = URL::to('/') . $post->image;
            

            if ($request->user_id != null) {
                if ((Like::whereUserId($request->user_id)->wherePostId($post->id)->exists()) && Like::whereNull('deleted_at')) {
                    $post->liked_by_me =   true;
                } else {
                    $post->liked_by_me =   false;
                }
            } else {
                $post->liked_by_me =   false;
            }
        }
        //$order->product =  Product::withTrashed()->find( $order->product_id );
        $response = ['posts' => $posts];
        return response()->json($response, 200, [], JSON_NUMERIC_CHECK);
    }

    public function getPostsTourism(Request $request)
    {
        $posts = Post::where('tag', 'tourism')->orderBy('id', 'desc')->get();
        foreach ($posts as $post) {
            $post->likes;
            $post->image = URL::to('/') . $post->image;
            $post->time = $post->created_at->diffForHumans();

            $post->comments;
            $post->likes_count = count($post->likes);

            if ($request->user_id != null) {
                if ((Like::whereUserId($request->user_id)->wherePostId($post->id)->exists()) && Like::whereNull('deleted_at')) {
                    $post->liked_by_me =   true;
                } else {
                    $post->liked_by_me =   false;
                }
            } else {
                $post->liked_by_me =   false;
            }
        }
        //$order->product =  Product::withTrashed()->find( $order->product_id );
        $response = ['posts' => $posts];
        return response()->json($response, 200, [], JSON_NUMERIC_CHECK);
    }

    public function getMyPosts(Request $request)
    {

        $user = User::find($request->user_id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $posts = Post::where('user_id', $request->user_id)->orderBy('id', 'desc')->get();
        foreach ($posts as $post) {
            $post->likes;
            $post->image = URL::to('/') . $post->image;
            $post->time = $post->created_at->diffForHumans();
            $post->comments;

            $post->likes_count = count($post->likes);

            if ($request->user_id != null) {
                if ((Like::whereUserId($request->user_id)->wherePostId($post->id)->exists()) && Like::whereNull('deleted_at')) {
                    $post->liked_by_me =   true;
                } else {
                    $post->liked_by_me =   false;
                }
            } else {
                $post->liked_by_me =   false;
            }
        }
        //$order->product =  Product::withTrashed()->find( $order->product_id );
        $response = ['posts' => $posts];
        return response()->json($response, 200, [], JSON_NUMERIC_CHECK);
    }

    public function getPost($postId)
    {

        $post = Post::find($postId);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        $post->time = $post->created_at->diffForHumans();
        $post->image = URL::to('/') . $post->image;

        return response()->json(['post' => $post], 200, [], JSON_NUMERIC_CHECK);
    }

    public function postPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'tag' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 404);
        }

        if ($request->hasFile('file')) {

            $this->path =  Storage::putFile('posts', $request->file('file'));
        } else {
            $this->path = null;
        }

        $user = User::find($request->user_id);

        if (!$user) {
            return response()->json(['message' => 'user not found'], 404);
        }

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->tag = $request->tag;
        $post->category_id = $request->category_id;

        $post->image = $this->path != null ? $this->path : null;

        $user->posts()->save($post);

        $post->time = $post->created_at->diffForHumans();
        return response()->json(['post' => $post], 200, [], JSON_NUMERIC_CHECK);
    }

    public function putPost(Request $request, $postId)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()], 404);
        }
        $post = Post::find($postId);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->update([
            'title' => $request->title,
            'body' => $request->body,

        ]);

        return response()->json(['post' => $post], 200, [], JSON_NUMERIC_CHECK);
    }

    public function viewFile($postId)
    {
        $post = Post::withTrashed()->find($postId);
        if (!$post) {
            return response()->json(['message' => 'post not found'], 404);
        }

        $pathToFile = storage_path('/app/' . $post->image);

        return response()->download($pathToFile);
    }

    public function deletePost($postId)
    {
        $post = Post::find($postId);

        if (!$post) {
            return response()->json(['message' => 'post not found'], 404);
        }

        $post->delete();
        return response()->json(['message' => 'post deleted successfully'], 200);
    }
}
