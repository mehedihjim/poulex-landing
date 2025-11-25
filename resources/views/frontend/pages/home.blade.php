@extends('frontend.layouts.app')

@section('title', config('app.name'))

@section('content')
    @include('frontend.components.hero')
    @include('frontend.components.why-poulex')
    @include('frontend.components.features')
    @include('frontend.components.process')
    @include('frontend.components.success')
@endsection
