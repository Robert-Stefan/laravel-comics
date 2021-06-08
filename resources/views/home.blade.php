@extends('layout/main')

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="cards">
                @foreach($cards as $card)
                    <div class="card text-center">
                        <img src="{{ $card['image'] }}" alt="">
                        <div>{{ $card['title'] }}</div>
                    </div> 
                @endforeach
                <div class="button text-center">
                    Load More
                </div>
            </div>
        </div>
    </section>
    <div class="bar"></div>
@endsection