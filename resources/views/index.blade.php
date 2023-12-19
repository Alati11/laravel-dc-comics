@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Thumb</th>
            <th>Price</th>
            <th>Sale_date</th>
            <th>Type</th>
            
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
              <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>
                  <img src="{{ $comic->thumb }}" width="40" alt="">
                </td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
              </tr>
          @empty
              <tr>
                <td colspan="6">
                  Nessuna comic trovato
                </td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>

@endsection