@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="container mt-4">

        @foreach ($posts as $post)
        {{-- row --}}
        <div class="row d-flex justify-content-center">
            <div class="col-8 mb-2">
                <a href="/p/{{$post->user->id}}">
                    <img src="/storage/{{ $post->image }}" class="rounded-top w-100">
                </a>
            </div>
        </div>
        {{-- /row --}}

        {{-- row --}}
        <div class="row d-flex justify-content-center">
            <div class="col-8 mb-3">
                <p>
                    <a href="/profile/{{$post->user->id}}" class="text-decoration-none link-dark fw-bold fs-5">{{$post->user->username}}</a>
                    <span class="ms-4">{{$post->caption}}</span>
                </p>
            </div>
            @endforeach
        </div>
        {{-- /row --}}

        {{-- pagination row --}}
        <div class="row ">
            <div class="col-12 d-flex justify-content-center">
                {{$posts->links()}}
            </div>
        </div>
        {{-- /pagination row --}}

    </div>

</div>
@endsection
