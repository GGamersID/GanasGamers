@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="notification is-success">
        {{ session('status') }}
    </div>
@endif

  <div class="columns">
    <div class="column is-one-third is-offset-one-third m-t-100">
      <div class="card">
        <div class="card-content">
          <h1 class="title">Forgot Password?</h1>

          <form action="{{route('password.email')}}" method="POST" role="form">
            {{csrf_field()}}
          <div class="field">
              <label for="email" class="label">Email Address</label>
              <p class="control">
                <input type="text" {{$errors->has('email') ? 'is-danger' : ''}} class="input" name="email" id="email" placeholder="example@mail.com" value="{{old('email')}}">
              </p>
              @if ($errors->has('email'))
                <p class="help is-danger">{{$errors->first('email')}}</p>
              @endif
          </div>
          <button class="button is-primary is-outlined is-fullwidth m-t-30">Reset Password</button>
          </form
        </div><!-- End Of Content -->

      </div>
    </div>
    <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"><i class="fa fa-caret-left m-r-10"></i>Back To Login</a></h5>
  </div>
@endsection
