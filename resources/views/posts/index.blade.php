@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
{{-- @each('parts.partials.post', $posts, 'post') --}}
@forelse($posts as $key => $post)
@include('posts.partials.post', [])
@empty
No posts found!
@endforelse
@endsection
