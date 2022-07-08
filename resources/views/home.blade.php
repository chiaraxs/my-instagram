@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

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
                <div class="d-flex">
                    <h5 class="py-3 fw-bold text-center ">{{$user->profile->title}}</h5>
                    {{-- button --}}
                    <div class="mt-2 mx-4">
                        <button type="button" class="btn btn-primary">Follow</button>
                    </div>
                    {{-- /button --}}
                </div>

                {{-- page details --}}
                <div class="d-flex">
                    <div><span class="fw-bold">153</span> post</div>
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

            <div class="col-3">
                <img src="https://unsplash.it/300/300?image=79" class="img-fluid rounded-top">
            </div>

            <div class="col-3">
                <img src="https://unsplash.it/300/300?image=12" class="img-fluid rounded-top" alt="">

            </div>

            <div class="col-3">
                <img src="https://unsplash.it/300/300?image=234" class="img-fluid rounded-top" alt="">

            </div>

            <div class="col-3">
                <img src="https://unsplash.it/300/300?image=922" class="img-fluid rounded-top" alt="">

            </div>
        </div>
        {{-- row --}}

    </div>


</div>
@endsection
