@extends('layouts.app')
@section('title', 'Dettaglio')

@section('content')
  <div class="container my-5">
    {{-- @dd($comic) --}}

    <div class="row my-5">
      <div class="col text-center">
        <h2>{{$comic->title}}</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-2">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
      </div>

      <div class="col-10">
        {{$comic->description}}

        <div class="row mt-5">
          <div class="col-6 text-center">Prezzo: {{$comic->price}}€</div>
          <div class="col-6 text-center">Serie: {{$comic->series}}</div>
        </div>
        
        <div class="row my-2">
          <div class="col-6 text-center">Data uscita: {{$comic->sale_date}}</div>
          <div class="col-6 text-center">Tipo: {{$comic->type}}</div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between mt-5">
      <a href="{{route('comics.index')}}" class="btn btn-outline-dark "><i class="fas fa-arrow-left me-2"></i> Torna indietro</a>
      <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-outline-dark"> Modifica elemento <i class="fas fa-edit ms-2"></i></a>
      <a href="#" class="btn btn-outline-danger"> Elimina <i class="far fa-trash-alt ms-2"></i></a>
    </div>

  </div>
@endsection