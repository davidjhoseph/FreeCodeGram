@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 py-3 text-center">
            <img src=
            '{{ $user->profile->image ? "/storage/{$user->profile->image}":"https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" }}'
             alt="logo" style="width:50%" class="rounded-circle">
        </div>
        <div class="col-9 p-3">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-2">
                        <h1>{{ $user->username }}</h1>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/post/create" >Add New Post</a>
                    @endcan
                </div>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{$user->profile ? $user->profile->title: 'Welcome to Instagram: PLease update your profile' }}</strong></div>
            <div>{{ $user->profile ? $user->profile->description: 'Description needed' }}</div>
            <div><a href="#">{{ $user->profile ? $user->profile->url: 'URL needed if any' }}</a></div>
            <div>
                @if($user->profile)
                    @can('update', $user->profile)  
                        <a href="/profile/update/{{$user->id}}">edit your profile</a>
                    @endcan
                @else 
                    @if($user->id == auth()->user()->id)
                        <a href="/profile/create/{{$user->id}}">create your profile</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
    <hr>
    <div class="row pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/post/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt="image" class="w-100"></a>
        </div>
        @endforeach
    </div>
</div>
@endsection
