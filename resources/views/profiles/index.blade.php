@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fslv1-2.fna.fbcdn.net/v/t51.2885-19/s150x150/118766259_368863627459392_8537436316124047650_n.jpg?_nc_ht=instagram.fslv1-2.fna.fbcdn.net&_nc_ohc=EaLGhRpX3c0AX8XjM97&oh=d0b8a8478e7eb86dc0de8d84a3aaff69&oe=5F7C8C79" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pr-4"><strong>255</strong> followers</div>
                <div class="pr-4"><strong>125</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
            <div>{{$user->profile->description}}
            </div>
            <div><a href="#"><strong>{{$user->profile->url}}</strong></a></div>
            
        </div>
    </div>
    <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
        @endforeach

    </div>
</div>
@endsection
