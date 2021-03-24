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
                <td>
                    <a href="{{route('flowers.show', compact('flower'))}}"><i class="fas fa-info-circle"></i></a>
                    <!-- tasti di modifica solo le l'utente è loggato -->
                    @if(Auth::check())
                        <a href="{{route('flowers.edit', compact('flower'))}}"><i class="fas fa-edit"></i></a>
                        <form action="{{route('flowers.destroy', compact('flower'))}}" method="post">
                            @csrf 
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Elimina</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>

      @if(Auth::check())
        <a href="{{route('flowers.create')}}"><button type="button" class="btn btn-secondary">Inserisci un nuovo elemento</button></a>
      @endif
      <a href="{{route('home')}}"><button type="button" class="btn btn-info">Vai alla home</button></a>

@endsection