@extends('layouts.landing')

@section('title', 'services')

@section('content')

    <h1>services</h1>
        @component('_components.card')
            @slot('title', 'services 1')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipiscing elit')
        @endcomponent
        @component('_components.card')
            @slot('title', 'services 2')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipiscing elit')
        @endcomponent
        @component('_components.card')
            @slot('title', 'services 3')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipiscing elit')
        @endcomponent
        @component('_components.card')
            @slot('title', 'services 4')
            @slot('content', 'lorem ipsum dolor sit amet consectetur adipiscing elit')
        @endcomponent


@endsection