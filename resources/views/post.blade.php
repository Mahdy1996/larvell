@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{$post->title}} <small>by Prof. General Huel IV</small>

                    <span class="pull-right">
                        {{-- {{$body}} --}}
                    </span>
                </div>

                <div class="panel-body">
                    <p>{{$post->body}}</p>
                    <p>
                        Category: <span class="label label-success">ipsum</span> <br> Tags:
                        <span class="label label-danger">No tag found.</span>
                    </p>
                </div>
            </div>


            @foreach ($post->comments as $comment)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lacey Gaylord DVM says...

                    <span class="pull-right">{{$comment->created_at->diffForHumans()}}</span>
                </div>

                <div class="panel-body">
                    <p>{{$comment->text}}</p>
                </div>
            </div>
            @endforeach


        </div>



    </div>

</div>
@endsection
