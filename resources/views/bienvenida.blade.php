@extends('layouts.app')

@section('content')

<h1 class="text-center">Bienvenid@ a la tienda</h1>
<div class="container">
    <div class="card-deck">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Articulo 1</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer text-center">
            <a href="{{route('comprar')}}" class="btn btn-success">Comprar</a>
          </div>
        </div>

</div>
</div>

@endsection
