@extends('user.auth.layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Welcome To Admin Panel</p>
        <form action="{{ route('user.login.submit') }}" method="post">
          @csrf

          <x-forms.input-right-append type="email" placeholder="Email" name="email" icon="fas fa-envelope" required="required"/>
          <x-forms.input-right-append type="password" placeholder="Password" name="password" icon="fas fa-lock"  required="required"/>

          <div class="row">
            <div class="col-12 mb-3 text-right">
              <a href="{{ route('user.register') }}">{{ __('Register Here') }}</a>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection