@extends('layouts.master')

@section('content')
	@include ('laravel-jobs::filter')
	@include ('laravel-jobs::list')
@stop