@extends('layout.app') 

@section('page-title')
    Dettagli Prodotto
@endsection

@section('main-content')

    {{-- Text Details about product --}}
    @include('small-components/product_details_text')

    {{-- Specs --}}
    
@endsection