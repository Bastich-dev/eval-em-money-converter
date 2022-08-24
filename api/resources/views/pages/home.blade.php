@extends('layouts.app')

@section('content')
    <h1><strong>Accueil</strong></h1>
    @include('content.listProducts', ['products' => $products])
@endsection
