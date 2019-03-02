@extends('layouts.app')

@section('content')
<!--  About me Section -->
<div class="container">
    <section class="about-me">
        <h4 class="special-title">Introduction</h4>
        <h1 class="big-title">Design anything.</h1>
        <p>Hey, I'm Daniel. By now you should already have a good grasp of what I do; so let me share with you a bit about myself first. I'm an open-minded guy with an uncinventional apprpoach to design. I never limit myself to just one creative field - always pushing to design anything and explore new boundaries. I'm constantly evolving, learning, and growing so you can axpect that working with me is going to be a fun and exciting ride. Cool, now that you know me for me, how may I help you today?</p>
    </section>
</div>


<!--  Services Section -->
<div class="container">
        <section class="services">
                @foreach ($services as $index => $service)
                    <article class="service row justify-content-between align-items-center">
                        
                        @if ($index % 2 == 0)
                            <div class="service-content col-md-6">
                                <div class="number">{{ $index + 1 }}</div>
                                <h2 class="default-title">{{ $service->name }}</h2>
                                <p> {{ $service->description }} </p>
                            </div>
            
                            <div class="service-image col-md-6">
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}">
                            </div>
                        @else
                            <div class="service-image col-md-6">
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}">
                            </div>

                            <div class="service-content col-md-6">
                                <div class="number">{{ $index }}</div>
                                <h2 class="default-title">{{ $service->name }}</h2>
                                <p> {{ $service->description }} </p>
                            </div>
                        @endif
        
                    </article>
                @endforeach
        </section>
</div>

<div class="container">
    <section class="contact">
        <h2 class="big-title">Your Turn.</h2>
        <p>Get in touch now. Tell me more about yourself and how I can help you</p>
    </section>
    
    <div class="row boxes">
         <div class="box box1 col-sm-6">
            <p>Start a project</p>
            <div class="arrow"><img src="{{ asset('images/arrow.svg') }}" alt="go"></div>
        </div>
        <div class="box box2 col-sm-6">
            <p>Email me</p>
            <div class="arrow"><img src="{{ asset('images/arrow.svg') }}" alt="go"></div>
        </div>
    </div>
</div>


@endsection