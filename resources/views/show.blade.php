@extends('master.app')
@section('title','show')
@section('content')
    <a href="{{route('posts.index')}}" class="btn btn-sm btn-primary">Return to Posts</a>
    <h1>{{$post->title}} </h1>
    <div class="row">
        <div class="col-lg-5">


            {{$post->body}} <br> <br>

            <table>
                <tr>
                    <td></td>

                    <td><a href="{{route('posts.edit',$post->post_id)}}" class="btn-primary btn-sm">Edit</a></td>


                    <td>
                        <form action="{{route('posts.destroy',$post->post_id)}}" method="post">

                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">

                            <input type="submit" value="delete" class="btn-danger btn-xs">

                        </form>
                    </td>

                </tr>
            </table>


        </div>
    </div>
@endsection