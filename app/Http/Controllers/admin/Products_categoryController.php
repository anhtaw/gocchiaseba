<?php

namespace App\Http\Controllers\admin;

    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\model\admin\Products_category;
    use Illuminate\Support\Facades\DB;

class Products_categoryController extends Controller
{

public function index()
    {

    $products_category = Products_category::sortable()->paginate(5);

    return view('admin.products_category.index',['products_category' => $products_category]);

    }
    /**
     * Show the form for creating a new resource.
     *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.products_category.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {

       $products_category = new Products_category();
        $products_category->insert([
            'name_category' => $request->input('name_category'),
        ]);
        return redirect()->route('products_category.index')
            ->with('success', 'Products_category created successfully.');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Products_category $products_category
    * @return \Illuminate\Http\Response
    */
   public function show(Products_category $products_category)
   {
    $products_category = products_category::findOrFail();
       return view('products_category.show',compact('products_category'));
   }

   /**
    * Show the form for editing the specified resource.
    *
    *@param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Products_category $products_category)
   {
    return view('admin.products_category.edit',compact('products_category'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\products_category $products_category
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request,Products_category $products_category)
   {

       $request->validate([
           'name_category' => 'required',

       ]);
       $products_category->update([
           'name_category' => $request->input('name_category'),

       ]);
       return redirect()->route('products_category.index')
           ->with('success', 'Products_category updated successfully');

   }


   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\products_category $products_category
    * @return \Illuminate\Http\Response
    */
   public function destroy(Products_category $products_category)
   {
    $products_category->delete();
       return redirect()->route('products_category.index')
                       ->with('success','Products_category deleted successfully');
   }
}









