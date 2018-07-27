{{--
  Template Name: First Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <div class="t1_1">
      <div class="background" style="background-image: url(/wp-content/themes/kndds/resources/assets/images/shutterstock_586996379_2.jpg)"></div>
      <div class="triangle"></div>
      <div class="shade" style="background-image: url(/wp-content/themes/kndds/resources/assets/images/bg.png)"></div>
    </div>


    @include('partials.content-page')
  @endwhile
@endsection
