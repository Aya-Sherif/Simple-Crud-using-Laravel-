@extends('app')


@section('Content')

<div class="container">
    <h1> Edit category info</h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <form method ="POST" action="{{url('categories/'.$category->id)}}" class="form border p-3">
                @csrf
                @method('PUT')
@include('messages.success')
@include('messages.errors')
             <div class="mb-3">
                <label for=""> Category Name</label>
                <input type="text" name="name" value="{{$category->name}}" id="" class="form-control">
             </div>

            <div class="mb-3">
                <input type="submit" value="save" id="" class=" form-control bg-success">
             </div>
            </form>
        </div>
    </div>
</div>
@endsection
