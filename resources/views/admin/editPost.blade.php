@extends('layouts.app')

@section('content')

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>
                  Edit Post

                  <a href="/posts" class="btn btn-default pull-right"
                    >Go Back</a
                  >
                </h2>
              </div>

              <div class="panel-body">
                  @include('admin.errors')
                <form
                  method="POST"
                  action="/posts/{{$post->id}}"
                  accept-charset="UTF-8"
                  class="form-horizontal"
                  role="form"
                >
                @csrf()
                <input name="_method" type="hidden" value="PUT">
                  <div class="form-group">
                    <label for="title" class="col-md-2 control-label"
                      >Title</label
                    >

                    <div class="col-md-8">
                      <input
                        class="form-control"

                        autofocus="autofocus"
                        name="title"
                        type="text"
                        value="{{$post->title}}"
                        id="title"
                      />

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="body" class="col-md-2 control-label"
                      >Body</label
                    >

                    <div class="col-md-8">
                      <textarea
                        class="form-control"

                        name="body"
                        cols="50"
                        rows="10"
                        id="body"
                      >{{$post->body}}</textarea>


                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="category_id" class="col-md-2 control-label"
                      >Category</label
                    >

                    <div class="col-md-8">
                      <select
                        class="form-control"
                        required="required"
                        id="category_id"
                        name="category_id"
                        ><option value="1">sedd</option
                        ><option value="2">ut</option
                        ><option value="3">id</option
                        ><option value="4">occaecati</option
                        ><option value="5">sint</option
                        ><option value="6">quia</option
                        ><option value="7" selected="selected">ipsum</option
                        ><option value="8">quisquam</option
                        ><option value="9">unde</option
                        ><option value="10">voluptatum</option></select
                      >

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary">
                        Update
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>



  @endsection
