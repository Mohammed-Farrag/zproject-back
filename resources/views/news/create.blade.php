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
                        <label>Days</label>
                        <input type="number" name="days" class="form-control">
                    </div>
                    <div class="form-group col-3">
                        <label>Hours</label>
                        <input type="number" name="hours" class="form-control">
                    </div>
                    <div class="form-group col-3">
                        <label>Minutes</label>
                        <input type="number" name="minutes" class="form-control">
                    </div>
                    <div class="form-group col-3">
                        <label>Seconds</label>
                        <input type="number" name="seconds" class="form-control">
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