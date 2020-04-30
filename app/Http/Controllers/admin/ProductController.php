<?php
    namespace App\Http\Controllers\admin;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\model\admin\Product;
    use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products = Product::join()->paginate(5);
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productcategory = DB::table('products_category')->get();
        return view('admin.products.create',compact('productcategory'));
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




       $product = new Product();
        $product->insert([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'image' => $fileName,
            'loaisp' => $request->input('loaisp'),
            'gia' => $request->input('gia'),
            'status' => $request->input('status'),
        ]);
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail();
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $image = '';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('img/', $image);
        }
        $request->validate([
            'name' => 'required',
            'loaisp' => 'required',
        ]);
        $product->update([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'loaisp' => $request->input('loaisp'),
            'gia' => $request->input('gia'),
            'image' => $image,
            'status' => $request->input('status'),
        ]);
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}



