@extends('layout.app')

@section('content')
    <main class="container-full">
        <div>
            <img src="{{ asset('assets/banner.jpeg') }}" class="w-100 mb-5" style="height: 400px; object-fit: cover"/>

            <div class="p-5 w-100">
                @foreach ($articles as $article)
                    <div class="">
                        <div class="d-flex">
                            <img src="{{ asset($article->ArticleImage) }}" class="me-5 mb-5" style="height: 300px; width: 450px; object-fit:cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->ArticleName }}</h5>
                                <p class="card-text">{{ Str::limit($article->ArticleContent, 100) }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection