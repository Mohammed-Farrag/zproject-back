@extends('layouts.auth')


<style>
    .single-image {
        position: relative;
    }

    .single-image i {
        /* position: absolute; */
        bottom: -20px;
        right: 50%;
        cursor: pointer;
    }
</style>
@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
    <span class="text-success"> {{ Session::get('success') }}</span>
    @endif
    <div class="row mb-3">
        <div class="col-sm-6">
            <img class="img-fluid" src="{{  $gallery->thumbnail}}" alt="Photo">
        </div>
        <div class="col-sm-6">
            <div class="row">
                @foreach ( $gallery->images as $img )
                <div class="col-sm-3  single-image">
                    <img class="img-fluid " src="{{ $img->path}}" alt="Photo">


                    <a href="{{ route('galleries.delete-image', ['id' => $img->id ]) }}" class="btn btn-primary">
                        <i class=" fa fa-trash"></i>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    </div>

    <a href="{{ route('galleries.delete', ['id' => $gallery->id ]) }}" class="btn btn-primary">delete gallery</a>
    <a href="{{ route('galleries.edit', ['id' => $gallery->id ]) }}" class="btn btn-info">edit gallery</a>

    <form method="POST" class="mt-5" action="{{ route('galleries.add', $gallery->id )}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Add Images</label>
            <div class="input-group">
                <div class="custom-file">
                    <input type="file" name="images[]" multiple class="custom-file-input">
                    <label class="custom-file-label">Choose file</label>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection