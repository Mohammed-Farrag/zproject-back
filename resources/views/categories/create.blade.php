@extends('layouts.auth')

@section('content')
<div class="container-fluid">

    @if (Session::has('fail'))
        <span class="text-danger">{{ Session::get('fail') }}</span>
    @endif
    <form method="POST" action="{{ route('categories.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label >Name</label>
                <input type="text" name="title" class="form-control" >
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection