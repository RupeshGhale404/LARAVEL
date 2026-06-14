@extends('layout.layout')


@section('body')

<x-blogs.blogs:Sample="$Sample"/> 
<x-services.services :data="$data"/>   
@dd ($sample,$data)
@endsection

