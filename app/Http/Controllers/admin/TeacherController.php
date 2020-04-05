<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\model\admin\Teacher;
class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::latest()->paginate(5);
        return view('admin.giaovien.index', compact('teacher'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.giaovien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = '';
       if($request->hasFile('image')){
           $file = $request->file('image');
           $fileName = $file->getClientOriginalName();
           $file->move('img/', $fileName);
    }
    $teacher = new Teacher();
    $teacher->insert([
        'name' => $request->input('name'),
        'mon' => $request->input('mon'),
        'image' => $fileName,
      

    ]);
    return redirect()->route('giaovien.index')
        ->with('success', 'Teacher created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        $teacher = Teacher::findOrFail();
        return view('giaovien.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $giaovien)
    {
        return view('admin.giaovien.edit',compact('giaovien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $image = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('img/', $image);
        }
        $request->validate([
            'name' => 'required',
            
        ]);
        $teacher->update([
            'name' => $request->input('name'),
            'mon' => $request->input('mon'),
            'img' => $image
        ]);
        return redirect()->route('giaovien.index')
            ->with('success', 'Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('giaovien.index')
                        ->with('success','Teacher deleted successfully');
    }
}
