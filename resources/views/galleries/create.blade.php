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
                <label>Thumbnail</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="thumbnail" class="custom-file-input" id="custom-file-thumbnail">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
                <span id="thmbNameDisplay"></span>
            </div>

            <div class="form-group">
                <label>Images</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="images[]" multiple class="custom-file-input" id="custom-file-input">
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
        let thumb = document.getElementById('custom-file-thumbnail');
        let thumbDisplay = document.getElementById('thmbNameDisplay');


        thumb.addEventListener('change', (e) => {
            const fileInput = e.target;
            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;
                thumbDisplay.textContent = `Selected file: ${fileName}`;
            } else {
                thumbDisplay.textContent = '';
            }
        });


        let file = document.getElementById('custom-file-input');
        let display = document.getElementById('fileNameDisplay');

        file.addEventListener('change', (e) => {
            const fileInput = e.target;

            if(fileInput.files.length > 0){

                for (let i = 0; i < fileInput.files.length; i++) {
                    display.textContent += `${fileInput.files[i].name} , `;
                }
            } else {
                display.textContent =  '';
            }

        })
    </script>

@endpush