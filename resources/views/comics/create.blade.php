@extends('layouts.app')

@section('title', 'Create item')

@section('content')
  <div class="container">
    <form action="{{route('comics.store')}}" method="POST">

      {{-- csrf - Token laravel per rendere sicuro l'invio del form nel sito --}}
      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="description" name="description">
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" class="form-control" id="series" name="series">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date">
      </div>
      <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input type="text" class="form-control" id="type" name="type">
      </div>
     
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection