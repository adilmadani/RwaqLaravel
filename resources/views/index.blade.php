@extends('master.app')
@section('title','index')
@section('content')
    <h1>All Posts <a href="{{route('posts.create')}}" class="btn btn-sm btn-primary">Create new post</a></h1>
    <div class="row">
        <div class="col-lg-10">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>content</th>
                </tr>
                @foreach($posts as $rs)
                    <tr>
                        <td>{{$rs->post_id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->body}}</td>
                        <td><a href="{{route('posts.edit',$rs->post_id)}}" class="btn-primary btn-sm">Edit</a></td>
                        <td><a href="{{route('posts.show',$rs->post_id)}}" class="btn-success btn-sm">Show</a></td>
                        <td>
                            <form action="{{route('posts.destroy',$rs->post_id)}}" method="post">

                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">

                                <input type="submit" value="delete" class="btn-danger btn-xs">

                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>


        </div>
    </div>
@endsection