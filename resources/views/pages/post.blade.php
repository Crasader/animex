@extends('templates.public-main')
@section('page-title', $post->seo_title)
@section('page-description', $post->seo_description)
@section('meta-robots', $post->meta_robots)
@section('background-image', '/posts/' . $post->image)
@section('main-title', $post->title)

@section('content')
{!! $post->content !!}
@endsection