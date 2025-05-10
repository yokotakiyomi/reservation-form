@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($shops as $shop)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ $shop->image_url }}" class="card-img-top" alt="{{ $shop->shop_name }}">

                <div class="card-body">
                    <h5 class="card-title">{{ $shop->shop_name }}</h5>

                    <p class="card-text text-muted">
                        #{{ $shop->area_name}}
                        #{{ $shop->genre_name}}
                    </p>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('shops.show', $shop->id) }}" class="btn btn-primary btn-sm">詳しく見る</a>

                        <form action="{{ route('favorites.toggle', $shop->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link p-0">
                                <i class="fas fa-heart text-danger"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection