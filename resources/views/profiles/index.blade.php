@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

    {{-- container --}}
    <div class="container">

        {{-- row --}}
        <div class="row">

            {{-- col logo --}}
            <div class="col-3">
                <div class="d-flex justify-content-center ms-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" class="img-fluid rounded-top" width="150">
                </div>
            </div>
            {{-- /col logo --}}

            {{-- col details --}}
            <div class="col-9">
                <div class="d-flex justify-content-between">
                    <h5 class="py-3 fw-bold text-center ">{{$user->profile->title}}</h5>
                    {{-- button --}}
                    <div class="mt-2 mx-4">
                        <a class="btn btn-primary" href="/p/create" role="button">
                            Add Post
                        </a>
                    </div>
                    {{-- /button --}}
                </div>

                {{-- page details --}}
                <div class="d-flex">
                    <div><span class="fw-bold">{{$user->posts->count()}}</span> post</div>
                    <div><span class="fw-bold ps-3">456k</span> followers</div>
                    <div><span class="fw-bold ps-3">10k</span> following</div>
                </div>
                {{--/ page details --}}

                <div class="mt-2">
                    <a href="#" class="fw-bold">{{$user->profile->url}}</a>
                </div>

                <div class="mt-2">
                    <p>{{$user->profile->description}}</p>
                </div>

            </div>
            {{-- col details --}}

        </div>
        {{-- /row --}}

        {{-- row --}}
        <div class="row mt-5">

            {{-- posts --}}
            @foreach ($user->posts as $post)
            <div class="col-3 my-4">
                <img src="/storage/{{ $post->image }}" class="rounded-top w-100 h-100">
                <p class="text-center mt-2">{{$post->caption}}</p>
            </div>
            @endforeach
            {{-- /posts --}}

        </div>
        {{-- row --}}

    </div>
    {{-- /container --}}
</div>
@endsection
