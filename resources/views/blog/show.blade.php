@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        <!-- Oops, looks like something is missing here ¯\_(ツ)_/¯ -->
        By <span class="font-bold italic text-gray-800">{{ $post->author->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <!-- Oops, looks like something is missing here ¯\_(ツ)_/¯ -->
        {{ $post->content }}
    </p>

    <!-- Oops, looks like something is missing here ¯\_(ツ)_/¯ -->
@endsection
