@extends('layouts.app')

@section('content')

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2>
                  Create Comment

                  <a href="/comments" class="btn btn-default pull-right"
                    >Go Back</a
                  >
                </h2>
              </div>

              <div class="panel-body">
                <form
                  method="POST"
                  action="/comments"
                  accept-charset="UTF-8"
                  class="form-horizontal"
                  role="form"
                >
                @csrf
                  <div class="form-group">
                    <label for="name" class="col-md-2 control-label"
                      >Text</label
                    >

                    <div class="col-md-8">
                      <input
                        class="form-control"
                        required="required"
                        autofocus="autofocus"
                        name="text"
                        type="text"
                        id="name"
                      />

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>

                  </div>


                  <div class="form-group">
                    <label for="name" class="col-md-2 control-label"
                      >Post</label
                    >

                    <div class="col-md-8">
                      <select name="post_id"  class="form-control">
                          @foreach ($posts as $post)
                          <option value="{{$post->id}}">{{$post->title}}</option>
                          @endforeach
                      </select>

                      <span class="help-block">
                        <strong></strong>
                      </span>
                    </div>

                  </div>

                  <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                      <button type="submit" class="btn btn-primary">
                        Create
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection
