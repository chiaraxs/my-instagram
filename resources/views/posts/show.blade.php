@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

    <div class="container">

        <div class="row">

            {{-- col sx -> image --}}
            <div class="col-9">
                <img src="/storage/{{ $post->image }}" class="rounded-top w-100 h-100">
            </div>
            {{-- col sx --}}

            {{-- col dx -> details --}}
            <div class="col-3">
                <div>
                    <img src="/storage/{{ $post->user->profile->image}}" class="img-fluid rounded-top" alt="">
                    <div>

                        <div>
                            <a href="/profile/{{$post->user->id}}" class="link-dark mx-2 fw-bold fs-2">{{$post->user->username}}</a>

                            <hr>

                            <p>
                                {{$post->caption}}
                            </p>
                        </div>

                    </div>
                    {{-- /col dx --}}
                </div>

            </div>

        </div>
        @endsection
