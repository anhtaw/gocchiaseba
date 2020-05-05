<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        $huhu = DB::table('posts')
        ->orderBy('id', 'desc')
        ->paginate(2);
        $posts = Post::latest()->paginate(5);

        return view('index.post.index', compact('posts'), compact('huhu'));
    }
    public function create()
    {
        return view('index.post.create');
    }

    public function store(Request $request)
    {
        $fileName = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move('img/', $fileName);
        }
        $fileName1 = '';
        if($request->hasFile('img')){
            $file = $request->file('img');
            $fileName1 = $file->getClientOriginalName();
            $file->move('img/', $fileName1);
        }
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
            'image'=>'required',
            'img'=>'required',
            'body1'=>'required',
            'body2'=>'required',
        ]);
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        Post::create( $input);

        return redirect()->route('post.index');
    }
    public function show($id)
    {
        $huhu = DB::table('posts')
                ->orderBy('id', 'desc')
                ->paginate(2);
    	$post = Post::find($id);
        return view('index.post.show', compact('post',),compact('huhu'));
    }
    public function gettimkiem(Request $request)
{ $huhu = DB::table('posts')
    ->orderBy('id', 'desc')
    ->paginate(2);
    $q = $request->input('s');
    $a = Post::where('title','LIKE','%'.$q.'%')->orWhere ( 'id', 'LIKE', '%' . $q . '%' )->get();
    if(count($a) > 0)
        return view('index.post.indexresult',compact('huhu'))->withposts($a)->withQuery ( $q );
    else return view ('index.post.indexresult',compact('huhu'))->withMessage('No Details found. Try to search again !');
}

}
