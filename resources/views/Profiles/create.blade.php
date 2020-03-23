@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Create User Profile</h1>
        <form action="/profile" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">User Title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" autofocus>
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">User description</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description') }}" autocomplete="description" autofocus>
                        @error('description')
                                <span><strong>{{ $message }}</span></strong>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">User url</label>
                        <input type="text" class="form-control @error('url') is-invalid @enderror" name="url" id="url" value="{{ old('url') }}" autocomplete="url" autofocus>
                        @error('url')
                                <span><strong>{{ $message }}</span></strong>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                        @error('image')
                                <span><strong>{{ $message }}</span></strong>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary">Create Profile</button>
                </div>
            </div>
        </form>
    </div>
@endsection