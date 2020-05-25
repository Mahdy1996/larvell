@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Comments

                            <a href="/comments/create" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($comments as $comment)
                              <tr>
                                <td>{{$comment->post->title}}</td>
                                <td>{{$comment->text}}</td>
                                <td>
                                    <a href="" data-method="DELETE" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                        data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>

                              @endforeach
                            </tbody>
                        </table>

                      <div class="text-center">
                          {{$comments->render()}}
                      </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
