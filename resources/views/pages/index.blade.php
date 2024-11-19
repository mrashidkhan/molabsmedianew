@extends('layouts.master')

@section('title', 'Home Page')

@section('page-title', 'Home Page')

@section('content')
    @include('partials.homepage-header')
    @include('partials.sponsorslogo')
    @include('partials.sectionone')
    {{-- @include('partials.sectiontwo') --}}
    @include('partials.aboutusourservices')
    @include('partials.sectionthree')
    @include('partials.contactsection')
@endsection
