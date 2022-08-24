@extends('layouts.app')

<?php
$slug = str_replace('category/', '', Request::path());

$index = array_search($slug, array_column($categories, 'slug'));
$category = $categories[$index];
?>


@section('content')
    <h1><strong>Collection: {{ $category['name'] }}</strong></h1>
    @include('content.listProducts', ['products' => $products])
@endsection
