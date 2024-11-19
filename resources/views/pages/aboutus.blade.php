@extends('layouts.master')

@section('title', 'About Us')

@section('page-title', 'About Us')

@section('content')
    @include('partials.aboutussection')
    @include('partials.aboutusmobileform')
    @include('partials.aboutusourservices')
    @include('partials.aboutusevents')
@endsection
