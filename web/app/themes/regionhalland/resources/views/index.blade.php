@extends('layouts.app')

@section('content')
    
    <div>
        @include('partials.nav-front')
    </div>

    <div class="background-white">
         @include('partials.front-sidor')
    </div>

    <div class="background-white">
	     @include('partials.nyheter')
    </div>

@endsection
