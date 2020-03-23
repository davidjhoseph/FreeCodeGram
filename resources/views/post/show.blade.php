@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/{{ $post->image }}" class="w-100" alt="image">
        </div>
        <div class="col-md-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="/storage/{{ $post->user->profile->image }}" class="w-100 rounded-circle" style="max-width: 40px">
                </div>
                <div class="font-weight-bold pr-3">
                <a href="/profile/{{$post->user->id  }}" class="text-dark">{{ $post->user->username   }}</a> 
                </div>
                <a href="#" class="font-weight-bold">Follow</a>
            </div>
            <hr>
        <p><span class="font-weight-bold pr-4"><a href="/profile/{{$post->user->id  }}" class="text-dark">{{ $post->user->username   }}</a> </span>{{ $post->caption  }}</p>
        </div>
    </div>
</div>
@endsection
