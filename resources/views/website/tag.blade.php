﻿@extends('layouts.website')
@section('content')
    <div class="py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <span>Tag</span>
            <h3>{{$tag->name}}</h3>
            <p>{{$tag->description}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-white">
      <div class="container">
        <div class="row">

        @foreach ($posts as $post)
        <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="{{route('postpage',$post->slug)}}"><img src="{{asset('website/images/posts/'.$post->image)}}" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name}}</span>

              <h2><a href="{{route('postpage',$post->slug)}}">{{$post->title}}</a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="@if ($post->user->image)
                    {{asset('backend/img/user/'.$post->user->image)}}@else{{asset('backend/img/user/defalt-user.png')}}@endif" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">{{$post->user->name}}</a></span>
                <span>&nbsp;-&nbsp; {{$post->created_at->format('d M Y')}}</span>
              </div>

                <p>{{Str::limit(strip_tags($post->description),120)}}</p>
                <p><a href="{{route('postpage',$post->slug)}}">Read More</a></p>
              </div>
            </div>
          </div>
        @endforeach
        </div>
        {{$post->links}}
    </div>
@endsection
