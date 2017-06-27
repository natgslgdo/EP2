
{!!Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
<input type="submit" class="col-xs-12 btn btn-danger" name="" value="Eliminar">
{!! Form::close() !!}
