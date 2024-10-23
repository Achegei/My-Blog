@extends('main')

@section('title', ' | Edit Blog Post')

@section('content')

<div class="row">
  <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="col-md-8">
      <label for="title">Title:</label>
      <input type="text" name="title" class="form-control input-lg" value="{{ old('title', $post->title) }}">

      <label for="body" style="margin-top: 30px">Body:</label>
      <textarea name="body" class="form-control">{{ old('body', $post->body) }}</textarea>
    </div>

    <div class="col-md-4">
      <div class="well">
        <dl class="dl-horizontal">
          <dt>Created At:</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
        </dl>
  
        <dl class="dl-horizontal">
          <dt>Last Updated:</dt>
          <dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
        </dl>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-6">
          <a href="{{ route('posts.show', $post->id) }}" class="btn btn-danger btn-block">Cancel</a>
        </div>
        <div class="col-sm-6">
          <button type="submit" class="btn btn-success btn-block">Save Changes</button>
        </div>
      </div>
    </div>
  </form>
</div>

@stop
