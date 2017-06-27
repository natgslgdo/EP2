<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order_Products;
class ShoppingCartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $product = new Product;
        $product->product_id= $request->product_id;
        $product->name= $request->product_name;
        $product->price= $request->product_price;
        $product->qty= $request->qty;


        \Session::push('cart.orderProduct',$product);
        return redirect('/products');

        $shopping_cart=\Session::get('cart.orderProduct');
        $total = Order_products::total();
        $productsSize = Order_products:: productsSize();
        $products = Product::paginate(2);
        return view('products.index',
        [
          'shopping_cart'=>$shopping_cart,
          'total'=>$total,
          'productsSize'=>$productsSize,
          'products'=>$products
        ]);
      }
//     public function store(Request $request)
// {
//      $product= new Product;
//      $product->product_id=$request->product_id;
//      $product->name = $request->product_name;
//      $product->price= $request->product_price;
//      $product->qty= $request->qty;
//       \Session::push('cart.orderProduct',$product);
//       return redirect('/products');
// }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
