@extends('layouts.guest')
@section('content')
<div class="col-md-12">



    @if(Session::has('fail'))
    <span>{{ Session::get('fail') }}</span>
    @endif
    @if(Session::has('success'))
    <span>{{ Session::get('success') }}</span>
    @endif


    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Register as Admin</h3>
        </div>


        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Admin name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter You Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    
    </div>
    <a href="/admin/login">Login from here</a>


</div>


@endsection