@extends('user.auth.layouts.app')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Register Here</p>
        <form action="{{ route('user.register.submit') }}" method="post">
          @csrf
          <x-forms.input-right-append type="text" placeholder="Enter Full Name" name="name" icon="fas fa-user" required="required"/>
          <x-forms.input-right-append type="email" placeholder="Email" name="email" icon="fas fa-envelope" required="required"/>
          <x-forms.input-right-append type="password" placeholder="Password" name="password" icon="fas fa-lock"  required="required"/>

          <x-forms.input-right-append type="password" placeholder="Confirm Password" name="password_confirmation" icon="fas fa-lock"  required="required"/>

          <div class="row">
            <div class="col-12 mb-3 text-right">
              <a href="{{ route('user.login') }}">{{ __('Login Here') }}</a>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection