@extends('layouts.app')

@section('content')

  <section class="py-5">
    <div class="container">
      <h1>{{ $comic->title }}</h1>
      <p>
        {{ $comic->description }}
      </p>
      <img class="my-3" src="{{ $comic->thumb }}" width="120" alt="">   
      <p>  
      {{ $comic->price }}
      </p>
        {{ $comic->sale_date }}
      </p>
      </p>
        {{ $comic->type }}
      </p>
    </div>
  </section>

@endsection