@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
        <span class="text-success"> {{ Session::get('success') }}</span>
    @endif
    <a href="{{ route('galleries.create') }}" class="btn btn-primary">create gallery</a>
    <div class="row mt-5">
    @foreach ($galleries as $gallery )

        <a href="{{ route('galleries.show', ['id' => $gallery->id ] ) }}" class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><img src="{{ $gallery->thumbnail}}" /></span>
                <div class="info-box-content text-right">
                    <span class="info-box-number">{{ $gallery->title}} </span>
                </div>
            </div>
        </a>

    @endforeach
    </div>
</div>

@endsection