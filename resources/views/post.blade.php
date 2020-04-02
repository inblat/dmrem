@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">{{ $page->name }}</h1>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {!! $page->seo_text !!}
            </div>
        </div>

    </div>
@endsection
