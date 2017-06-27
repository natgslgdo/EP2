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
         <th>id</th>
         <th>Status</th>
         <th>id_user</th>
       </tr>
     </thead>
     <tbody>
       @foreach($orders as $order)
       <tr>
         <td>{{$order->id}}</td>
         <td>{{$order->status}}</td>
         <td>{{$order->user_id}}</td>
       </tr>
        @endforeach
     </tbody>
   </table>



</div>

@endsection
