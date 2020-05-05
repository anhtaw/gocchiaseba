<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use App\model\index\Ad;
use Illuminate\Http\Request;
use App\model\admin\Product;

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
        $product = Ad::paginate(5);
        return view('index.ad.index', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

public function getgiaotrinh(){

        $product1 = DB::table('products')
    // -> where( 'products.status','like','1' )
    -> where('products.loaisp','=','1')
    ->get();
    return view('index.ad.indexgiaotrinh',['doquangduc' => $product1]);
}
public function getdodung()
{
    $product1 = DB::table('products')
    -> where('products.loaisp','=','2')
    ->get();
    return view('index.ad.indexdodung',['doquangduc' => $product1]);
}
public function getdoan()
{
    $product1 = DB::table('products')
    -> where('products.loaisp','=','3')
    ->get();
    return view('index.ad.indexdoan',['doquangduc' => $product1]);
}
public function getdodungcanhan()
{
    $product1 = DB::table('products')
    -> where('products.loaisp','=','4')
    ->get();
    return view('index.ad.indexdodungcanhan',['doquangduc' => $product1]);
}
public function getquanao()
{
    $product1 = DB::table('products')
    -> where('products.loaisp','=','5')
    ->get();
    return view('index.ad.indexquanao',['doquangduc' => $product1]);
}

public function getchitiet(Request $req)
{

    $product1 = DB::table('products')
    -> where('products.id',$req ->id)->first();
  
    return view('index.ad.indexchitiet',compact('product1'));
}
// protected $request;
public function gettimkiem(Request $request)
{

    $q = $request->input('q');
    $a = Product::where('name','LIKE','%'.$q.'%')->orWhere ( 'gia', 'LIKE', '%' . $q . '%' )->get();
    if(count($a) > 0)
        return view('index.ad.indextimkiem')->withDetails($a)->withQuery ( $q );
    else return view ('index.ad.indextimkiem')->withMessage('No Details found. Try to search again !');
    // ->withDetails($product)
    // $product1 = DB::table('products')
    // -> where('products.id',$req ->id)->first();
  
    // return view('index.ad.indextimkiem',compact('product1'));
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
