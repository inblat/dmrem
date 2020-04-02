@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Totall comments {{ $comments->count() }}</h1>
            <a class="btn btn-primary" href="/comments/create"><span class="fa fa-paper-plane"></span>Add comment</a>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($comments as $comment)
                    <tr>
                        <th scope="row">{{ $comment->id }}</th>
                        <td>{{ $comment->user_name }}</td>
                        <td>{{ $comment->message }}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
                {{ $comments->render() }}
        </div>
    </div>
@endsection
