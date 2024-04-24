@extends('dashboard.master')
@section('title','All Note')
@section('body')
<p>{{session('message')}}</p>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">description</th>
        <th scope="col">Create Time</th>
        <th scope="col">Update Time</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($notes as $note)       
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$note->title}}</td>
        <td>{{$note->description}}</td>
        <td>{{$note->created_at}}</td>
        <td>{{$note->updated_at}}</td>
        <td>
            <a href="{{route('note.edit',['id'=>$note->id])}}">Edit</a>
            <a href="{{route('note.delete',['id'=>$note->id])}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection