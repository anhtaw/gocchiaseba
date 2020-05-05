<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $posts = Post::latest()->paginate(5);

        return view('index.post.index', compact('posts'));
    }
    public function create()
    {
        return view('index.post.create');
    }

    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Post::create( $input);

        return redirect()->route('post.index');
    }
    public function show($id)
    {
    	$post = Post::find($id);
        return view('index.post.show', compact('post'));
    }

}