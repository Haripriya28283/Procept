@extends('layouts.home')

@section('content')
@include('layouts.nav')
 
<div class="row justify-content-center mt-5">
    <div class="col-12 col-md-8 ">
    <h4> <span class="allevents-title" >{{$eventlist->title}}</span></h4>
      
        <button class="all-events-list"><a href="/"> Home </a> <i class='fas'>&#xf0da; </i>{{$eventlist->title}}</button>
        <div class="content text-right text-justify-custom mt-3">
            {!! $eventlist->body_value !!}
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection
