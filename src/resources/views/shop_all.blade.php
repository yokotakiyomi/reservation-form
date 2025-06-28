@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_all.css') }}">
@endsection

@section('header_extra')
<form action="{{ route('shop.index') }}" method="GET" class="filter-form">
    <div class="filter-controls">
        <select name="area">
            <option value="">All area</option>
            @foreach($areas as $area)
            <option value="{{ $area->id }}" {{ request('area') == $area->id ? 'selected' : '' }}>
                {{ $area->area_name }}
            </option>
            @endforeach
        </select>

        <select name="genre">
            <option value="">All genre</option>
            @foreach($genres as $genre)
            <option value="{{ $genre->id }}" {{ request('genre') == $genre->id ? 'selected' : '' }}>
                {{ $genre->genre_name }}
            </option>
            @endforeach
        </select>

        <input type="search" name="keyword" placeholder="Search …" value="{{ request('keyword') }}" />
        <button type="submit" class="btn-search">🔍</button>
    </div>
</form>
@endsection


@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach ($shops as $shop)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card h-100">
                <img src="{{ $shop->image_url }}" class="card-img-top" alt="{{ $shop->shop_name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $shop->shop_name }}</h5>
                    <p class="card-text text-muted">
                        #{{ $shop->area->area_name }} #{{ $shop->genre->genre_name }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('shops.detail', ['id' => $shop->id]) }}" class="btn btn-primary btn-sm">詳しくみる</a>
                        <form action="{{ route('favorites.toggle', $shop->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link p-0">
                                <i class="fa-heart {{ $shop->is_favorite ? 'fas text-danger' : 'far text-muted' }}"></i>
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