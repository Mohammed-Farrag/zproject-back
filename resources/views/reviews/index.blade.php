@extends('layouts.auth')

@section('content')

<div class="container-fluid">
    @if (Session::has('success'))
    <span class="text-success"> {{ Session::get('success') }}</span>
    @endif
    <div class="row mt-5 w-100">
        <div class="card w-100">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>User</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($revs as $rev )
                        <tr>
                            <td>{{ $rev->rating }} </td>
                            <td>{{ $rev->comment }} </td>
                            <td>{{ $rev->user->name }} </td>
                            <td>
                                <a href="{{ route('reviews.delete' , ['id' => $rev->id]) }}" class="btn btn-primary">Delete</a>
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