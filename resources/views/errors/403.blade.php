@extends('frontend.app')

@push('style')
    <style>
        .error-page-body {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .full-screen-image {
            width: 500px;
        }
    </style>
@endpush

@section('title')
    Forbidden..!
@endsection

@section('main')
    <main class="error-page-body">
        <img class="full-screen-image" src="{{asset('frontend/assets/images/errors/403.svg')}}" alt="">
    </main>
@endsection
