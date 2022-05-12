@extends('layouts.base')

@section('head-title','home')
    

@section('header-nav')
    @include('partials.header.header_nav')    
@endsection

@section('main-content')
    @include('partials.main.main_cards')    
@endsection