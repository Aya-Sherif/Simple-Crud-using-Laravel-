@extends('app')


@section('Content')

<div class="container">
    <h1> Edit Post info</h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <form method ="POST" action="{{url('Posts/'.$post->id)}}" class="form border p-3">
                @csrf
                @method('PUT')
@include('messages.success')
@include('messages.errors')
             <div class="mb-3">
                <label for=""> Post Title</label>
                <input type="text" name="title" value="{{$post->title}}" id="" class="form-control">
             </div>
             <div class="mb-3">
                <label for=""> Post Description</label>
                <textarea name="description" id=""  class="form-control" >{{$post->description}}</textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="save" id="" class=" form-control bg-success">
             </div>
            </form>
        </div>
    </div>
</div>
@endsection
