@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title is-admin is-3">Create The Amazing Post</h1>
      </div>
      <div class="column">
        {{-- <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New User</a> --}}
      </div>
    </div>
      <hr class="m-t-0">
      <form action="{{route('posts.store')}}" method="POST">
        {{ csrf_field() }}
        <div class="columns">
          <div class="column is-three-quarters">
            <div class="field">
              <div class="control">
                <input class="input is-large" type="text" placeholder="Post Title">
              </div>
            </div>
            <p>
              {{url('/blog')}}
            </p>
            <div class="field">
              <div class="control">
                <textarea class="textarea is-medium" type="text" placeholder="Compose your idea.." rows="20"></textarea>
              </div>
            </div>
          </div><!-- end of .column -->
          <div class="column is-one-quarters">
            <div class="card card-widget">

                <div class="author-widget-area">
                  <div class="selected-author">
                  <img src="https://placehold.it/50x50"/ class="is-pulled-left">
                  <h4>By: GanasGamers
                      <p class="subtitle-1">
                        (F.abdurrahman)
                      </p>
                  </h4>
                </div>
                <div class="post-status-widget-area">
                  <h4>Draft</h4>
                  <p>A few Minutes Ago (Saved)</p>
                </div>
              <div class="publish-button-widget">
                <div class="secondary-action-button">
                  <button class="button is-info is-outlined is-fullwidth" >Save Draft</button>
                </div>
                <div class="primary-action-button">
                  <button class="button is-primary is-fullwidth" >Publish</button>
                </div
              </div>

            </div>
          </div><!--one quarter -->
        </div>
      </form>

  </div>
@endsection
@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {}
    });
  </script>
@endsection
