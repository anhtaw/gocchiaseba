<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use App\model\admin\User;
    use Session;
class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct() {
//        $this->middleware('auth');
//    }

    // public function login()
    // {
    //     return view('admin.user.login');
    // }
    public function register()
    {
        return view('admin.user.register');
    }
    public function layout()
    {
        return view('admin.layout');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function index()
    {
        $user = User::sortable()->paginate(5);
        return view('admin.user.index', compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function indexdetail(User  $user)
    {
        return view('admin.user.indexdetail',compact('user'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'name' => 'required|min:5|max:255',
            'password' => 'required',
            'email' => 'required|email|unique:users',
        ],
        [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute Khôngđược nhỏ hơn :min',
            'max' => ':attribute Không được lớn hơn :max',
        ],
        [
            'name' => 'Tên',
            'password' => 'mật khẩu',
            'email' => 'email',
        ]
    );
       User::create(request(['name', 'email', 'password']));

        return redirect()->route('user.index')
            ->with('success','user created successfully.');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User  $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User  $user)
    {
        $image = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('img/', $image);
        }
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'image' => 'required',
            'level' => 'required',
            'active' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('user.index')
                        ->with('success','user updated successfully');
    }
    public function updatedetail(Request $request, User  $user)
    {  $image = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('img/', $image);
        }
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
        ]);

        $user->update($request->all());
        return redirect()->route('user.index')
                        ->with('success','user updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User  $user)
    {
        $user->delete();
        return redirect()->route('user.index')
                        ->with('success','User deleted successfully');
    }
}
