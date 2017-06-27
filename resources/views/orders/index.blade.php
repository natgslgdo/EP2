@extends('layouts.app')
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<style>
    .demo-card-wide.mdl-card {
      align-items: center;
      width: 512px;
    }
    .demo-card-wide > .mdl-card__title {
      color: #fff;
      height: 176px;
    }
    .demo-card-wide > .mdl-card__menu {
    color: #fff;
    }
    body{

    }
</style>

@section('content')
<div class="container">

  <table class="table">
     <thead>
       <tr>
         <th>Producto</th>
         <th>Cantidad</th>
         <th>subtotal</th>
       </tr>
     </thead>
     <tbody>
       @foreach($shopping_cart as $product)
       <tr>
         <td>{{$product->name}}</td>
         <td>{{$product->qty}}</td>
         <td>{{$product->price}}</td>
       </tr>
        @endforeach
     </tbody>
   </table>
   <h1>total a pagar: ${{$total}}</h1>

  <!-- <div class="col-xs-12">
      @foreach($shopping_cart as $product)
        {{$product->name}} ${{$product->price}}
        número de productos {{$productsSize}}

          {{$product->product_id}}
      @endforeach
    </div> -->
    {!!Form::open(['url' => '/orders','method' => 'POST', 'class' => 'inline-block']) !!}

      Nombre :
      {{  Form::text('name','',['class'=>'form-control'])  }}
      Direccion:
      {{  Form::text('description','',['class'=>'form-control'])  }}
        Telefono:
      {{  Form::text('price','',['class'=>'form-control'])  }}


      <p align="center">
          <button  class="mdl-button mdl-js-button mdl-button--fab">
            <i class="material-icons">+</i>
          </button>
          </p>

    {!! Form::close() !!}


</div>

@endsection
