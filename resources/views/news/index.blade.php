@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    @if (Session::has('success'))
    <span class="text-success"> {{ Session::get('success') }}</span>
    @endif
    <a href="{{ route('news.create') }}" class="btn btn-primary">create New</a>
    <div class="row mt-5 w-100">
        <div class="card w-100">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Time</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($news as $new )
                        <tr>
                            <td>{{ $new->slug }} </td>
                            <td>{{ $new->soon }} </td>
                            
                            <td>
                                <img 
                                class="img-fluid mb-3" 
                                style="width:150px" src="{{ $new->image }}" alt="Photo">
                            </td>
                            <td>{{ $new->category->title }} </td>
                            <td>
                            <a href="{{ route('news.delete' , ['id' => $new->id]) }}" class="btn btn-primary">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>


@endsection