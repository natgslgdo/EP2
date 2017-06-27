@extends('layouts.app')
@section('content')
  {!!Form::open(['url' => '/categories/','method' => 'POST', 'class' => 'inline-block']) !!}

    Nombre de la categoria:
    {{  Form::text('name','',['class'=>'form-control'])  }}
    Descripción de la categoria:
    {{  Form::textarea('description','',['class'=>'form-control'])  }}
    <br><br>


  <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}

@endsection
