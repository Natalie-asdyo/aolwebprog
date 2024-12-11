@extends('layouts.app')

@section('content')
    <h1 class="display-4">Baca Artikel yuk!</h1>
        <div class="list-group">
        @foreach($articles as $article)
            <a href="{{ route('articles.show', $article->id) }}" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $article->title }}</h5>
                <p>{{ $article->description }}</p>
            </a>
        @endforeach
    </div>
@endsection
