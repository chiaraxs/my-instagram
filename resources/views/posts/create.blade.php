@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">

    <div class="container">

        <form action="/p" method="POST" enctype="multipart/form-data">

            @csrf
            {{-- title --}}
            <div class="row text-center">
                <h3>Add new Post</h3>
            </div>

            {{-- row 1 --}}
            <div class="form-group row d-flex justify-content-center mt-5">
                <label for="caption" class="col-4 col-form-label fw-bold text-end">Post Caption</label>

                <div class="col-8">
                    <textarea name="caption" cols="20" rows="5" class="form-control @error('caption') is-invalid @enderror" placeholder="Insert your post's caption" required>{{ old('caption') }}</textarea>

                        
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{-- row 2 --}}
            <div class="row d-flex mt-3">
                <label for="caption" class="col-4 col-form-label fw-bold text-end">Post Image</label>

                <div class="col-8">
                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
            </div>

            {{-- row 3 - submit button --}}
            <div class="row mt-5">
                <div class="col-xs-4 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

    </div>
        

</div>
@endsection
