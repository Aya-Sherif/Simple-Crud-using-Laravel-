@extends('app')


@section('Content')

<div class="container">
    <h1> Add New Post </h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <form method ="POST" action="{{url('/Posts')}}" class="form border p-3">
                @csrf
@include('messages.success')
@include('messages.errors')

             <div class="mb-3">
                <label for=""> Post Title</label>
                <input type="text" name="title" id="" class="form-control">
             </div>
             <div class="mb-3">
                <label for=""> Post Description</label>
                <textarea name="description" id="" class="form-control" ></textarea>
            </div>
            <div class="mb-3">
                <input type="submit" value="save" id="" class=" form-control bg-success">
             </div>
            </form>
        </div>
    </div>
</div>
@endsection
