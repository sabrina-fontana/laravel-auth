@extends('layouts.base')

@section('title', 'Show')

@section('content')
    
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$flower->image}}" alt="Card image cap">
        <div class="card-body">
        <h3 class="card-text">{{$flower->name}}</h3>
        <p class="card-text">famiglia: {{$flower->family}}</p>
        </div>
  </div>

@endsection