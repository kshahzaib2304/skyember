@extends('layouts.app')

@php
    $title = 'SKYEMBER - Software that moves business forward';
    $description = 'We design and engineer custom software, business platforms, and digital products for organizations ready to move beyond off-the-shelf tools.';
    $canonical = url('/');
@endphp

@section('content')
    <x-home.hero />
    <x-home.capabilities />
    <x-home.product-proof />
    <x-home.selected-work />
    <x-home.process />
    <x-home.final-cta />
@endsection
