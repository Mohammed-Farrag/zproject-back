@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <form method="POST" action="{{ route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description">

                </textarea>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>Size</label>
                <select class="form-control" name="size">
                    <option>Select Size</option>
                    <option value="A0">A0</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                </select>
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
                        <input type="file" name="image" class="custom-file-input" id="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
                <span id="fileNameDisplay"></span>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection



@push('scripts')

<script>
    let file = document.getElementById('custom-file-input');
    let display = document.getElementById('fileNameDisplay');

    file.addEventListener('change', (e) => {
        const fileInput = e.target;
        if (fileInput.files.length > 0) {
            const fileName = fileInput.files[0].name;
            display.textContent = `Selected file: ${fileName}`;
        } else {
            display.textContent = '';
        }
    })
</script>

@endpush