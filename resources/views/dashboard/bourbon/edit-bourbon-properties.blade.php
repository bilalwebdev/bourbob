@extends('layout.master')
@section('title')
    All Bourbons
@endsection

@section('content')
@include('dashboard.bourbon.components.bourbon-nav')
    <livewire:dashboard.bourbon.bourbon-properties :bourbon="$bourbon" />
@endsection
