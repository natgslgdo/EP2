@extends('layouts.app')
@section('content')

<div class="container">

  @foreach ($products as $product)

  <img style="height:150px;" class="col-xs-2" src="/images/products/{{$product->image}}"
  alt="img-responsive" />;
  <div class="col-md-4">
    <h3>{{$product->name}}</h3>
    <h3>{{$product->price}}</h3>
    <p>{{$product->description}}</p><br>
    @if (Auth::user()->admin())
    <a class="col-xs-12 btn btn-warning"
    href="{{url('/products/'.$product->id).'/edit'}}">Editar</a>
    @endif

<br><br>
    @if (Auth::user()->admin())
    @include('products.delete',['product'=>$product])
    @endif
    <br><br>
    {!!Form::open(['url' => '/shopping_carts/','method' => 'POST', 'class' => 'inline-block']) !!}
    <input type="hidden" name="product_id" value="{{$product->id}}">
    <input type="hidden" name="product_name" value="{{$product->name}}">
    <input type="hidden" name="product_price" value="{{$product->price}}">
    <input type="hidden" name="product_description" value="{{$product->description}}">
    <label>cantidad:</label>
    <input  type="number" name="qty">
    <input type="submit" class="col-xs-12 btn btn-success" value="Agregar al carrito">
    <!-- para eliminar del carrito  -->
    <!-- @if (Auth::user()->admin())
    <a onclick ="eliminarProducto({{$product->id}})"class="btn btn-danger">
      Eliminar</a>
    @endif -->
      {!! Form::close() !!}
  </div>
    @endforeach

      <!-- <div class="col-xs-12">
          @foreach($shopping_cart as $product)
            {{$product->name}} ${{$product->price}}
          @endforeach
        </div>
        <div class="col-xs-12">
            @foreach($shopping_cart as $product)
              {{$product->product_id}}
            @endforeach
          </div>
      <div class="col-xs-12">
        número de productos {{$productsSize}}
        total a pagar:{{$total}}
      </div> -->

      <div class="col-xs-12">
        <a class="btn btn-success"
        href="{{url('/orders/')}}">Terminar de comprar</a>
      </div>

    <div class="col-xs-12">
      {{$products->links()}}
    </div>
</div>

@endsection
