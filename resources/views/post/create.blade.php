@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Add New Post</h1>
        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" autocomplete="caption" autofocus>
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group">
                        <label for="image" class="col-md-4 col-form-label">Post Image</label>
                        <input type="file" class="form-control-file" name="image" id="image">
                        @error('image')
                                <span><strong>{{ $message }}</span></strong>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </form>
    </div>
@endsection