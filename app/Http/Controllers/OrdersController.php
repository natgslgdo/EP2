<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\Order_products;
class OrdersController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    //

    $shopping_cart=\Session::get('cart.orderProduct');
    if($shopping_cart)
    {
      $total = Order_products::total();
      $productsSize = Order_products:: productsSize();
      $products = Product::paginate(2);
    }
    else {
      {
        $total=0;
        $productsSize=0;
        $shopping_cart=array();
      }
    }
    return view('orders.index',
    [
      'shopping_cart'=>$shopping_cart,
      'total'=>$total,
      'productsSize'=>$productsSize,
      'products'=>$products
    ]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
    $orders = Order::all(); // Esta diciendo que solo va a extraer el nombre y el ID de la categoria
    return view('orders.create',['orders'=>$orders]);
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
    $shopping_cart=\Session::get('cart.orderProduct');
    $order= new Order;
    /* id, user_id,status,created*/
    // $order_products = new Order_products;
    /*id, order_id,product_id, qty, */
    $order->user_id=Auth::id();

    $order->status='Espera';
    if($order->save()){
      // $order_products->id=1;

      foreach($shopping_cart as $product)
      {
        $order_products = new Order_products;

        /*se inserta el id de la orden*/
        $order_products->order_id=$order->id;
        /*Se inserta el id del producto*/

        $order_products->product_id=$product->product_id;
        /*Se inserta la cantidad*/

        $order_products->qty=$product->qty;

        // if($order_products->save()){
        //   echo "hola mundo";
        // }else {
        //   {
        //     echo "no hola mundo";
        //   }
        $order_products->save();
      }

        // dd($order_products);
       return redirect('/products');
    }else{
      return view('/orders');
    }
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
  public function edit($id)
  {
    //
    $orders = Order::all();
    return view('orders.edit',['orders'=>$orders]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update($orders)
  {
    //
    $product=Product::all();
     return view('orders.edit',['orders'=>$orders]);
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
