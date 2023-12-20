@extends('layouts.app')

@section('content')

<section class="py-5">
  <div class="container">
    <form action="{{ route('store') }}" method="POST" >

      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image (url)</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Url image">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Price"
            value="100">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Sale">
      </div>

      <div class="mb-3">
        <label for="seies" class="form-label">Series</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Series">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Type">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descripton"></textarea>
      </div>

      <div class="">
        <input type="submit" class="btn btn-primary" value="create">
      </div>

      
    </form>
  </div>
</section>

@endsection