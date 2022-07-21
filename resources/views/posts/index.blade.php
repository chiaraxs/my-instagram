@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="container">

        @foreach ($posts as $post)
        {{-- row --}}
        <div class="row">
            <div class="col-8 offset-2 mb-2">
                <a href="/p/{{$post->user->id}}">
                    <img src="/storage/{{ $post->image }}" class="rounded-top w-100">
                </a>
            </div>
        </div>
        {{-- /row --}}

        {{-- row --}}
        <div class="row">
            <div class="col-8 offset-2 mb-3">

                <p>
                    <a href="/profile/{{$post->user->id}}" class="text-decoration-none link-dark fw-bold fs-5">{{$post->user->username}}</a>
                    <span class="ms-4">{{$post->caption}}</span>
                </p>
            </div>
            @endforeach
        </div>
        {{-- /row --}}

    </div>


</div>
@endsection
