@extends('layouts.app')
@section('title', 'Comics page')

@section('content')
  <div class="container my-5">
    {{-- @dd($comics) --}}

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
              <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Dettagli</a>
              <a href="#" class="btn btn-secondary">Modifica</a>
              <a href="#" class="btn btn-danger">Cancella</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>



  </div>
@endsection