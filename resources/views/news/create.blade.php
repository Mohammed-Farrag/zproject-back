@extends('layouts.auth')

@section('content')



<div class="container-fluid">
    <form method="POST" action="{{ route('news.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>



            <div class="form-group">
                <div class="input-group date row" >
                    <div class="form-group col-3">
                        <label>Soon</label>
                        <input type="date" name="soon" class="form-control">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category_id">
                    <option>Select Category</option>
                    @foreach ($cats as $cat )
                    <option value="{{ $cat->id }}">{{ $cat->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection