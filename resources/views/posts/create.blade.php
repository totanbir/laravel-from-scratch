@extends('layouts.master')


@section('content')

<div class="col-sm-8 blog-main">
<h1>Publish a Post</h1>
<hr>
@include('layouts.errors')
<form method="POST" action="/posts">

		{{ csrf_field() }}

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
     </div>

  <button type="submit" class="btn btn-primary">Publish</button>

</form>

</div>
@endsection



