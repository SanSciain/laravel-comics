@extends('layout/app')

@section('title')
    DC homepage
@endsection

@section('main-content')
    <div class="container">
        <div class="comics-wrapper">
            @foreach ($comics_array as $item)
                @include('components.comic-card', [
                    'src' => $item['thumb'],
                    'title' => $item['title'],
                ])
            @endforeach
        </div>
    </div>
@endsection
