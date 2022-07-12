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
                <h3>{{$post->user->username}}</h3>
                <p>{{$post->caption}}</p>
            </div>
            {{-- /col dx --}}
        </div>

    </div>


</div>
@endsection
