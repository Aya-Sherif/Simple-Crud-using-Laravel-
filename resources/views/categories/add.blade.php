@extends('app')


@section('Content')

<div class="container">
    <h1> Add New Category </h1>
    <div class="row">
        <div class="col-8 mx-auto">
            <form method ="POST" action="{{url('categories')}}" class="form border p-3">
                @csrf
                        @include('messages.success')
                        @include('messages.errors')

             <div class="mb-3">
                <label for=""> Category Name</label>
                <input type="text" name="name" id="" class="form-control">
             </div>

            <div class="mb-3">
                <input type="submit" value="save" id="" class=" form-control bg-success">
             </div>
            </form>
        </div>
    </div>
</div>
@endsection
