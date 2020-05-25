@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            Posts

                            <a href="/posts/create" class="btn btn-default pull-right">Create New</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Author</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($posts as $post)
                                <tr>
                                   <td>{{$post->title}}</td>
                                    <td>Animi praesentium ad ipsum adipisci cum ea rerum quasi. Haru...</td>
                                    <td>Prof. General Huel IV</td>
                                    <td>ipsum</td>
                                    <td></td>
                                    <td>No</td>
                                    <td>
                                        <a href="/posts/1/publish" data-method="PUT" data-token="32Mxrb2s2QPyv3C1h4iYcbfZBT7PmU7Tfm9koxkk"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-warning">Publish</a>
                                        <a href="/posts/{{$post->id}}" class="btn btn-xs btn-success">Show</a>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-xs btn-info">Edit</a>
                                        {{-- <a href="/posts/{{$post}}" data-method="DELETE" data-token="{{csrf_token()}}"
                                            data-confirm="Are you sure?" class="btn btn-xs btn-danger">Delete</a> --}}

                                            <form action="/posts/{{$post->id}}"  method="POST">
                                                @csrf()
                                                <input name="_method" type="hidden" value="DELETE">
                                                <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                            </form>

                                    </td>
                                </tr>
                               @endforeach

                            </tbody>
                        </table>

                      <div class="text-center">
                        {{$posts->render()}}
                      </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
