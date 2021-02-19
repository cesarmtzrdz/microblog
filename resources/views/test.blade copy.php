@extends('layouts.app')

@section('title', 'Home')

@section('header')
<h1 class="mb4">Posts</h1>
@endsection

@section('content')

<div class="mb3">
    <a class="link f5 black dim b" href="{{ route('posts.create') }}">✍️ Write a Post</a>
</div>

<div>
TEST ME {{ $msj }}
</div>

@endsection
