@extends('app')

@section('Content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Categories Table </h1>
            @include('messages.success')

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Edit </th>
                        <th>Delete </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                        <a href="{{url('categories/'.$category->id.'/edit')}}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{url('categories/'.$category->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
{{$categories->links()}}
        </div>
    </div>
</div>

@endsection
