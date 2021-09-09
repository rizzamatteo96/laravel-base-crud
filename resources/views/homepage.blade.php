@extends('layouts.app')
@section('title', 'Comics page')

@section('content')
  <div class="container text-center">
    <h1 class="my-5">Homepage del sito</h1>
    <a href="{{route('comics.index')}}" class="btn btn-outline-dark rounded-pill my-5 py-3 px-5 fs-2">Vai alla lista di fumetti</a>
  </div>
@endsection