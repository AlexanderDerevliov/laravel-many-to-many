@extends('layouts.admin');

@section('content')


    <div class="container mt-5">

        <h2>{{ $post->title }}</h2>

        <div>
            Categoria: {{$post->category ? $post->category->name : "Nessuna Categoria"}}
        </div>

        <div>
            Tag: 
            @foreach($post->tags as $tag)

                <span class="badge" style="background-color: {{ $tag->hex_color }}">{{ $tag->name }}</span>
                
            @endforeach
        </div>

        <div class="mt-4">
            Data: {{ $post->created_at}}
        </div>

        <div class="mt-4">
            Slug: {{ $post->slug }}
        </div>

        <p class="mt-4">
            {{ $post->content}}
        </p>
    </div>


@endsection