@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

    {{-- container --}}
    <div class="container">

        {{-- row --}}
        <div class="row">

            <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')
                {{-- title --}}
                <div class="row text-center">
                    <h3>Edit Profile</h3>
                </div>

                {{-- row 1 --}}
                <div class="form-group row d-flex justify-content-center mt-5">
                    <label for="title" class="col-4 col-form-label fw-bold text-end">Title</label>

                    <div class="col-8">
                        <textarea name="title" class="form-control @error('title') is-invalid @enderror" required>{{ old('title') ?? $user->profile->title }}</textarea>


                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{-- row 2 --}}
                <div class="form-group row d-flex justify-content-center mt-5">
                    <label for="description" class="col-4 col-form-label fw-bold text-end">Description</label>

                    <div class="col-8">
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" required>{{ old('description') ?? $user->profile->description }}</textarea>


                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{-- row 3 --}}
                <div class="form-group row d-flex justify-content-center mt-5">
                    <label for="url" class="col-4 col-form-label fw-bold text-end">URL</label>

                    <div class="col-8">
                        <textarea name="url" class="form-control @error('url') is-invalid @enderror" required>{{ old('url') ?? $user->profile->url }}</textarea>


                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                {{-- row 4 --}}
                <div class="row d-flex mt-3">
                    <label for="caption" class="col-4 col-form-label fw-bold text-end">Profile Image</label>

                    <div class="col-8">
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>
                </div>

                {{-- row 5 - submit button --}}
                <div class="row mt-5">
                    <div class="col-xs-4 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Save Profile</button>
                    </div>
                </div>

            </form>


        </div>
        {{-- /row --}}


    </div>
    {{-- /container --}}
</div>
@endsection
