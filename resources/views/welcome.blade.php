@extends('layouts.app')

@section('content')
<div class="preloader" style="translate: none; rotate: none; scale: none; transform: translate(0px, -1500px); display: none; z-index: -1;">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="preloaderSvg" d="M0 2S175 1 500 1s500 1 500 1V0H0Z"></path>
    </svg>

    <div class="preloader-heading">
        <div class="load-text" style="translate: none; rotate: none; scale: none; opacity: 0; transform: translate(0px, -100px);">
            <span>L</span>
            <span>o</span>
            <span>a</span>
            <span>d</span>
            <span>i</span>
            <span>n</span>
            <span>g</span>
        </div>
    </div>
</div><div class="progress-wrap active-progress" id="scrollUp">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 63.3198;"></path>
    </svg>
</div>
@include('pages.hero')

@include('pages.services')
@include('components.service-popup')
@include('pages.portfolio')
@include('components.portfolio-popup')

@include('pages.resume')
@include('pages.skills')
@include('pages.testimonial')
@include('pages.contact')
@include('components.modal')

@endsection