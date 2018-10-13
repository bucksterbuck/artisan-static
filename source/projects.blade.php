@extends('_layouts.master')

@section('title', 'Projects')

@section('content')
    <h1>Projects</h1>

    <ul>
        @forelse ($projects->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>
                <small>{{ date('M j, Y', $post->date) }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
