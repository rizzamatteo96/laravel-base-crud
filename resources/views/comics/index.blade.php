@extends('layouts.app')
@section('title', 'Comics page')

@section('content')
  <div class="container my-5">
    {{-- @dd($comics) --}}
    <div class="d-flex justify-content-between">
      @if (session('modifica') || session('cancella'))
        <p class="alert alert-primary">
          @if (session('modifica'))
            {{session('modifica')}}            
          @endif
          @if (session('cancella'))
            {{session('cancella')}}            
          @endif
        </p>
      @else
        <p>
          {{-- da lasciare vuoto per l'ipaginazione --}}
        </p>
      @endif
      <a href="{{route('comics.create')}}" class="btn btn-outline-dark">Aggiungi elemento</a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Data uscita</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($comics as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->price}}€</td>
            <td>{{$comic->sale_date}}</td>
            <td>
              <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary px-3"><i class="fas fa-info"></i></i></a>
              <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
              <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection