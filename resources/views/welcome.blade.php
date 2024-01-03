@extends('layouts.user')
@section('title', 'e-Mading')
@section('content')
    <div class="py-4" style="background-color: grey">
        <div class="container">
            <div class="row">
                <div class="col-3 text-start">
                    <img src="{{ asset('img/Mobile Marketing-pana.svg') }}" alt="flyer" width="200px" height="230px">
                </div>
                <div class="col text-start" style="alig">
                    <h1>e-Mading</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid nobis ipsa sequi in harum a
                        asperiores natus reiciendis illo? Architecto impedit in fugit quos sed repudiandae veniam aspernatur
                        quasi ut?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            @foreach ($posting as $item)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('posting_img/' . $item->picture) }}" class="card-img-top" alt="{{ $item->title }}">
                    <div class="card-body" style="background-color: #EBE3D5;">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        {{-- Truncate the story to 50 words --}}
                        <p class="card-text">{!! Illuminate\Support\Str::limit( $item->story, $limit = 50, $end = '...') !!}</p>
                        <div class="card-footer text-center border-0" style="background-color: #EBE3D5;">
                            <a href="/detailposting/{{{$item->id}}}" class="btn btn-detail" style="background-color: #B0A695;">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    

@endsection
