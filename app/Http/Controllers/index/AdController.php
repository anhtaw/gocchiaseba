<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use App\model\index\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Ad::latest()->paginate(5);
        return view('index.ad.index', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

public function getgiaotrinh(){

        $product1 = DB::table('products')->join('products_category', 'products.loaisp', '=', 'products_category.id')
    // -> where( 'products.status','like','1' )
    ->get();
    return view('index.ad.indexgiaotrinh',['doquangduc' => $product1]);
}
public function getdodung()
{
    $product1 = DB::table('products')->join('products_category', 'products.loaisp', '=', 'products_category.id')
    -> where('products.loaisp','=','2')
    ->get();
    return view('index.ad.indexdodung',['doquangduc' => $product1]);
}
public function getdoan()
{
    $product1 = DB::table('products')->join('products_category', 'products.loaisp', '=', 'products_category.id')
    -> where('products.loaisp','=','3')
    ->get();
    return view('index.ad.indexdoan',['doquangduc' => $product1]);
}
public function getdodungcanhan()
{
    $product1 = DB::table('products')->join('products_category', 'products.loaisp', '=', 'products_category.id')
    -> where('products.loaisp','=','4')
    ->get();
    return view('index.ad.indexdodungcanhan',['doquangduc' => $product1]);
}
public function getquanao()
{
    $product1 = DB::table('products')->join('products_category', 'products.loaisp', '=', 'products_category.id')
    -> where('products.loaisp','=','5')
    ->get();
    return view('index.ad.indexquanao',['doquangduc' => $product1]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\index\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\index\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\index\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\index\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
