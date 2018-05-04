@extends('user.app')
@section( 'bg-image',Storage::disk('local')->url($post->image) )
@section('title',$post->title)
@section('sub-heading',$post->subtitle)
@section('main-content')

<!-- Post Content -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=387586371708263&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Date: {{$post->created_at->diffForHumans()}}</small>

                    @foreach($post->categories as $category)
                        
                          <small class="pull-right" style="margin-right:20px">

                             <span>Category:</span> <a href="{{route('category', $category->slug)}}"> {{$category->name}}  </a>

                          </small>
                       
                    @endforeach

                    {!!  htmlspecialchars_decode($post->body) !!}

                    @foreach($post->tags as $tag)
                        
                       
                          <small>

                             <span>Tags:</span>  <a href="{{route('tag', $tag->slug )}}">  {{$tag->name}}  </a>

                          </small>
                       
                    @endforeach
                </div>
                <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>

            </div>
        </div>
    </article>

    <hr>

@endsection