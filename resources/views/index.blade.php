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
            <th>
              <a href="{{ route('create') }}" class="btn btn-sm btn-primary">New Comic</a>
            </th>
            
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
              <tr>
                <td>
                  <a href="{{ route('show',$comic) }}">
                    {{ $comic->title }}
                  </a>
                </td>
                <td>{{ $comic->description }}</td>
                <td>
                  <img src="{{ $comic->thumb }}" width="80" alt="">
                </td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                  <p><a href="{{ route('edit',$comic)}}" class="btn btn-primary" >Edit</a></p>
                  <span>delete</span>
                </td>
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