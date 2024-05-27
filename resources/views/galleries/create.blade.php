@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('galleries.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Text</label>
                <input type="text" name="title" class="form-control">
            </div>
        


            <div class="form-group">
                <label >Thumbnail</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label >Images</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="images[]" multiple class="custom-file-input">
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