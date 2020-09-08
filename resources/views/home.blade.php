@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fdel3-2.fna.fbcdn.net/v/t51.2885-19/s150x150/106220987_4137550336287526_231409254709088710_n.jpg?_nc_ht=instagram.fdel3-2.fna.fbcdn.net&_nc_ohc=cIBEGfsfpxIAX8XAqaB&oh=55e69dffc89472088e5faee074d77ecb&oe=5F2DDFF8" class="rounded-circle" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
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
        <div class="col-4">
            <img src="https://instagram.fdel3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/106137288_194669385297057_6300428400740192911_n.jpg?_nc_ht=instagram.fdel3-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=vp1t5-Lj21YAX-Tztgc&amp;oh=fecfcafdbc92e7f7de3f985af91a0587&amp;oe=5F2EA434" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdel3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/106137288_194669385297057_6300428400740192911_n.jpg?_nc_ht=instagram.fdel3-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=vp1t5-Lj21YAX-Tztgc&amp;oh=fecfcafdbc92e7f7de3f985af91a0587&amp;oe=5F2EA434" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fdel3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.810.810a/s640x640/106137288_194669385297057_6300428400740192911_n.jpg?_nc_ht=instagram.fdel3-1.fna.fbcdn.net&amp;_nc_cat=109&amp;_nc_ohc=vp1t5-Lj21YAX-Tztgc&amp;oh=fecfcafdbc92e7f7de3f985af91a0587&amp;oe=5F2EA434" class="w-100">
        </div>
    </div>
</div>
@endsection
