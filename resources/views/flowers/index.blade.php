@extends('layouts.base');

@section('title', 'Index')

@section('content')

    <table class="table table-hover my-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Famiglia</th>
            <th scope="col">Immagine</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($flowers as $flower)
            <tr>
                <td>{{$flower->id}}</td>
                <td>
                    <a href="{{route('flowers.show', compact('flower'))}}">
                        {{$flower->name}}</td>
                    </a>
                <td>{{$flower->family}}</td>
                <td><img src="{{$flower->image}}"></td>
            </tr>
            @endforeach
        </tbody>
      </table>

@endsection