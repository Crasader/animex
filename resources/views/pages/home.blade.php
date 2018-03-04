@extends('templates.public-main')
@section('background-image', 'animex-banner.jpg')
@section('page-description')
Animex el blog de animes de la historia en habla hispana de M&eacute;xico para el mundo, Visitanos Hoy Mismo !
@endsection
@section('meta-robots', 'index, follow')
@section('main-title', 'Animex')
@section('main-subheading', 'El mejor anime para todos')

@section('content')
    @foreach($posts as $post)
    <div class="post-preview">
        <a href="{{ route('public.page.post', $post->slug) }}" title="Leer post completo de {{ $post->title }}">
            <h2 class="post-title">{{ $post->title }}</h2>

            @if(!empty($post->subtitle))
            <h3 class="post-subtitle">{{ $post->title }}</h3>
            @endif

            <img class="rounded img-fluid" src="images/posts/{{ $post->image }}" alt="{{ $post->image_alt }}">
        </a>

        <div>
            {!! str_limit($post->content, 225, ' ...') !!}
        </div>

        <p class="post-meta">Publicado por
            <a href="#">{{ $post->user->first_name . ' ' . $post->user->last_name }}</a>
            en {{ $post->created_at->format('d F, Y') }}</p>
    </div>
    <hr>
    @endforeach
@endsection