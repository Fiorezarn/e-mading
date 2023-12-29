@extends('layouts.user')
@section('title', 'Detail Posting')
@section('content')
    <div class="container py-4">
        <div class="mt-5" style="margin-bottom: 360px">
            <h1>{{ $posting->title }}</h1>
            <img src="{{ url('posting_img/', $posting->picture) }}" class="img-fluid mb-3" alt="{{ $posting->title }}" width="80px">
            <h3>{{ $posting->story }}</h3>
            <p>Category: {{ $posting->category }}</p>
        </div>
    </div>
@endsection
