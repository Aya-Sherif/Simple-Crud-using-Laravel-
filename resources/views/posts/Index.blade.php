@extends('app')

@section('Content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> Posts Table </h1>
            @include('messages.success')

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Edit </th>
                        <th>Delete </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>
                            <a href="{{url('Posts/'.$post->id.'/edit')}}" class="btn btn-info">Edit</a>
                        </td>
                        <td>
                            <form action="{{url('Posts/'.$post->id)}}" method="POST">
                                @method('DELETE')
                                @csrf

                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
{{$posts->links()}}
        </div>
    </div>
</div>

@endsection
