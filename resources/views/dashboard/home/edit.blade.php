@extends('dashboard.master')
@section('title','Edit Daily Note')
@section('body')
<form action="{{route('note.update',['id'=>$note->id])}}" method="POST">
    @csrf
    <p>{{session('message')}}</p>
    <div class="mb-3 mt-3">
      <label class="form-label">Title </label>
      <input type="text" class="form-control" value="{{$note->title}}" placeholder="Enter Title" name="title" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control"  placeholder="Enter Daily Note" name="description" required>{{$note->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Edit Note</button>
  </form>
@endsection