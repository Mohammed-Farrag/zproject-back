@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('galleries.update')}}" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="card-body">
            <div class="form-group">
                <label>Text</label>
                <input type="text" name="title" value="{{ $gallery->title  }}" class="form-control">
            </div>
        


            <div class="form-group">
                <label >Thumbnail</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file"  id="thumbnail" name="thumbnail" onchange="changeImg()" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <img src="{{ $gallery->thumbnail }}" id="thumbnail-img" alt="">
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

<script>

    

</script>


@endsection