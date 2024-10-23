@extends('main')

@section('title', '| Create New Post')
    

@section('content')
<div class="row">
  <div class="col-md-8 col-md-offset-2"></div>
  <h1>Create New Post</h1>
  <hr>
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="body">Post Body:</label>
      <textarea class="form-control" id="body" name="body" rows="5"></textarea>
  </div>  
    <button type="submit" class="btn btn-primary btn-success" style="margin-top: 20px">Create New Post</button>
</form>
</div>

@endsection

