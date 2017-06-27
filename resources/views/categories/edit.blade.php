@extends('layouts.app')
@section('content')
  {!!Form::open(['url' => '/categories/'.$categories->id,'method' => 'PATCH', 'class' => 'inline-block']) !!}

    Nombre de la categoria:
    {{  Form::text('name',$categories->name,['class'=>'form-control'])  }}
    Descripción de la categoria:
    {{  Form::textarea('description',$categories->description,['class'=>'form-control'])  }}
    <br><br>


  <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}

@endsection
