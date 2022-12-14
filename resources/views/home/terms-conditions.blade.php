@extends('layout.home.master')
@section('content')

<div class="container mx-auto my-auto">
    <div class="flex justify-center w-full">
        <div class="w-full p-10 max-w-7xl">
            <h2 class="text-2xl font-bold text-center">Terms & Conditions</h2>
            <p class="py-6 text-center text">{!! $site->terms_conditions !!}</p>
        </div>
    </div>
</div>

@endsection
