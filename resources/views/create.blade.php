@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('create') }}" method="POST" >

      @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url image">
      </div>
      <div class="mb-3">
        <label for="cooking_time" class="form-label">Price</label>
        <input type="text" class="form-control" name="cooking_time" id="cooking_time" placeholder="Price">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Sale date</label>
        <input type="text" class="form-control" name="weight" id="weight" placeholder="Sale">
      </div>

      <div class="mb-3">
        <label for="weight" class="form-label">Type</label>
        <input type="text" class="form-control" name="weight" id="weight" placeholder="Type">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Type</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descripton"></textarea>
      </div>

      
    </form>
  </div>
</section>

@endsection