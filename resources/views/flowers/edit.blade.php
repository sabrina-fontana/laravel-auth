@extends('layouts.base')

@section('title', 'Create')

@section('content')

    <h2>Modifica {{$flower->name}} :</h2>

    <form action="{{route('flowers.update', compact('flower'))}}" method="post">
        @csrf  
        @method('PUT')

        <div class="form-group">
        <label for="exampleInputEmail1">Nome fiore</label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Inserisci il nome..." value="{{$flower->name}}">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Famiglia</label>
        <input type="text" class="form-control" name="family" placeholder="Inserisci la famiglia..." value="{{$flower->family}}">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">Immagine</label>
        <input type="text" class="form-control" name="image" placeholder="Inserisci un URL..." value="{{$flower->image}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    <a href="{{route('flowers.index')}}"><button type="button" class="btn btn-secondary">Torna all'elenco</button></a>

@endsection
