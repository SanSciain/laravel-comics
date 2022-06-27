@extends('layout/app')

@section('title')
    DC comic {{ $comic['title'] }}
@endsection

@section('main-content')
    <div class="thumb">
        <div class="container">
            <div class="img-container">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
        </div>
    </div>
    <div class="desc-add">
        <div class="container">

            <div class="desc">
                <h2>{{ $comic['title'] }}</h2>
                <div class="availability">
                    <p><span class="green">U.S. Price: </span>{{ $comic['price'] }}</p>
                    <p class="green">AVAILABALE</p>
                </div>
                <p class="description">{{ $comic['description'] }}</p>
            </div>

            <div class="add">
                <h3>Advertisement</h3>
                <div class="img-container">
                    <img src="{{ asset('img/adv.jpg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="details">
        <div class="container">

            <div class="talent">
                <h3>Talents</h3>
                <div class="row">
                    <div class="title">Art by:</div>
                    <div class="body">
                        @foreach ($comic['artists'] as $item)
                            @if ($loop->last)
                                {{ $item }}
                            @else
                                {{ $item }},
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="title">Written by:</div>
                    <div class="body">
                        @foreach ($comic['writers'] as $item)
                            @if ($loop->last)
                                {{ $item }}
                            @else
                                {{ $item }},
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="specs">
                <h3>Specs</h3>
                <div class="row">
                    <div class="title">Series</div>
                    <div class="body">{{ $comic['type'] }}</div>
                </div>
                <div class="row">
                    <div class="title">U.S. Price</div>
                    <div class="body">{{ $comic['price'] }}</div>
                </div>
                <div class="row">
                    <div class="title">On Sale Date</div>
                    <div class="body">{{ $comic['sale_date'] }}</div>
                </div>
            </div>

        </div>
    </div>
@endsection
