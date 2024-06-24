@extends('layout.mainDashboard')

@section('head')
@include('dashincludes.head')
@endsection




@section('sideBar')
@include('dashincludes.sidebar2')
@endsection



@section('content')
@include('dashincludes.mainContent')
@include('dashincludes.javaScript')

@endsection
