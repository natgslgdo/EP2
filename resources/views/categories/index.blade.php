@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-4">
  @foreach ($categories as $category)
    <h2>{{$category->name}}</h2>
    <p>{{$category->description}}
      @include('categories.delete',['category'=>$category])
    <a class="col-xs-12 btn btn-warning"
    href="{{url('/categories/'.$category->id).'/edit'}}">Editar</a>
  @endforeach

  </p><br>
  </div>
</div>
@endsection
