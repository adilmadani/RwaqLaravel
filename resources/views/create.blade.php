@extends('master.app')
@section('title','create')
@section('content')
    <h1>Create New Post</h1>
    <hr>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
        @endif
    <div class="row">
        <div class="col-lg-10">
            <form action="{{route('posts.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title_input">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="content_input">Content</label>
                    <textarea rows="4" class="form-control" name="body"></textarea>

                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">save</button>

                </div>

            </form>


        </div>
    </div>
@endsection