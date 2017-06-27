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
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
      <div class="mdl-card__supporting-text">
        <h3>Agrega nuevos productos a tu catálogo.</h3>
      </div>
      <div class="mdl-card__actions mdl-card--border">

  {!!Form::open(['url' => '/products/','method' => 'POST', 'class' => 'inline-block']) !!}

    Nombre del producto:
    {{  Form::text('name','',['class'=>'form-control'])  }}
    Descripción del producto:
    {{  Form::textarea('description','',['class'=>'form-control'])  }}
    Precio del producto:
    {{  Form::number('price','',['class'=>'form-control'])  }}
    Categoría del producto:
    {{  Form::select('category_id',$categories,['class'=>'form-control'])  }}<br><br>
    <p align="center">
        <button  class="mdl-button mdl-js-button mdl-button--fab">
          <i class="material-icons">+</i>
        </button>
        </p>

  {!! Form::close() !!}
</div>
</div>
</div>
<div class="col-sm-3"></div>
</div>
@endsection
