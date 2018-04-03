@extends('master.app')
@section('title','Edit')
@section('content')
    <h1>Edit Post</h1>
    <hr>
    <div class="row">
        <div class="col-lg-10">
            <form action="{{route('posts.update',$post->post_id)}}" method="post">

                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title_input">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="content_input">Content</label>
                    <textarea rows="4" class="form-control" name="body">{{$post->body}}</textarea>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">update</button>

                </div>

            </form>


        </div>
    </div>
@endsection