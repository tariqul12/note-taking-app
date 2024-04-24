@extends('dashboard.master')
@section('title','Add Daily Note')
@section('body')
<form action="{{route('note.store')}}" method="POST">
    @csrf
    <p>{{session('message')}}</p>
    <div class="mb-3 mt-3">
      <label class="form-label">Title </label>
      <input type="text" class="form-control" id="email" placeholder="Enter Title" name="title" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea class="form-control"  placeholder="Enter Daily Note" name="description" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Note</button>
  </form>
@endsection