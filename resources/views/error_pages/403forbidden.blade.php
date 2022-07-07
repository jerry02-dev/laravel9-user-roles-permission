@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="lock"></div>
        <div class="message">
          <h1>Access to this page is restricted</h1>
          <p>Please check with the site admin if you believe this is a mistake. back to <a href="{{ route('home') }}">HOME</a></p>
        </div>
      </div>
      </div>
    </div>
@endsection