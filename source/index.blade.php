@extends('_layouts.main', [
	'stickyHeader' => true,
	'showNav' => true,
])

@section('bodyClass', 'home')

@section('body')

@include('_components.picture', [
	'alt' => 'Arc Boats Hero Image',
	'src' => 'hero',
	'id' => 'main-hero-image',
	'class' => 'hidden-xs'
])

@include('_partials.primary-cta')
@endsection
