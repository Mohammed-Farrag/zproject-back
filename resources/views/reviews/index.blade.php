@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
        <span class="text-success"> {{ Session::get('success') }}</span>
    @endif
    <a href="{{ route('products.create') }}" class="btn btn-primary">create product</a>
    <div class="row mt-5">

        @foreach ($products as $product )
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><img src="{{ url('/') . '/' . $product->image->path}}" /></span>
                <div class="info-box-content text-right">
                    <span class="info-box-text">{{ $product->title}}</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>
    
        @endforeach

    </div>
</div>

@endsection