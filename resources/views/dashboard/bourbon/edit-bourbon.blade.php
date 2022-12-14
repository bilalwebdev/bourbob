@extends('layout.master')
@section('title')
    All Flavors
@endsection

@section('content')
@include('dashboard.bourbon.components.bourbon-nav')
    <livewire:dashboard.bourbon.edit-bourbon :bourbon="$bourbon" />
@endsection
