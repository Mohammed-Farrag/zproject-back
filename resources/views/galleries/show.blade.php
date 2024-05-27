@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
    <span class="text-success"> {{ Session::get('success') }}</span>
    @endif
    <a href="{{ route('galleries.delete', ['id' => $gallery->id ]) }}" class="btn btn-primary">delete gallery</a>

    <div class="row mb-3">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{  $gallery->thumbnail}}" alt="Photo">
        </div>
        <div class="col-sm-6">
            <div class="row">
                @foreach (  $gallery->images as $img )
                    <div class="col-sm-3">
                        <img class="img-fluid mb-3" src="{{ $img->path}}" alt="Photo">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection