@extends('layout.app')

@section('page-title')
    Comics
@endsection

@section('main-content')
    {{-- Card List - Current Series --}}
    @include('small-components/comics_card_list')

    {{-- Icons Merchandising --}}
    @include('small-components/comics_icons_list')
    
@endsection