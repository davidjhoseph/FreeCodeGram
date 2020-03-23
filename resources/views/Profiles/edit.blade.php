@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-center">Update Your Profile</h1>
    <form action="/profile/{{$user->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">User Title</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $errors->has('title')? old('title'): $user->profile->title }}" autocomplete="title" autofocus>
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
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="description" id="description" value="{{ $errors->has('description')? old('description'): $user->profile->description }}">
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
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="url" id="url"  value="{{ $errors->has('url')? old('url'): $user->profile->url }}">
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
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </form>
    </div>
@endsection