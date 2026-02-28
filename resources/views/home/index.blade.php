@extends('layouts.app')

@section('content')
<section class="hero" style="background-image: url('{{ asset('images/Hero-Background.jpg') }}'); background-size: cover; background-position: center;">
    <div class="hero-text">
        <h1>STRAW<span>BERRY</span></h1>
        <p class="subtitle">A Cozy Private Minecraft Community</p>
    </div>
    
</section>
@endsection


@section('highlight')


    <section class="highlights">
    
    <h2 class="highlights-title">Strawberry <span>Highlights</span></h2>
    
    <div class="cards-container">
        <div class="card">
         <img src="{{ asset('images/events.jpg') }}" alt="Strawberry Events"/>
        </div>
        <div class="card">
            <img src="{{ asset('images/DragonFight.jpg') }}" alt="Strawberry Dragon Fight"/>
        </div>
        <div class="card">
            <img src="{{ asset('images/Celebrating.jpg') }}" alt="Strawberry Celebrating"/>
        </div>
        
    </div>
</section>

@endsection

@section('culture')


<section class="culture-section">
    <div class="culture-container">
        <div class="culture-image"> 
            <img src="{{ asset('images/cultureimg.jpg') }}" alt="Strawberry Culture"/>
       </div>
        <div class="culture-content">
            <h3 class="culture-title">Culture</h3>
            <p class="culture-text">

                {{ $content['home_culture'] ?? 'No content yet.' }}

            </p>
        </div>
    </div>
</section>


@endsection

@section ('history')
   <section class="history-section">
    <div class="culture-container">
        <div class="culture-content">
            <h3 class="culture-title">History</h3>
            <p class="culture-text">

                {{ $content['home_history'] ?? 'No content yet.' }}

            </p>
        </div>
        
        <div class="culture-image"> 
        <img src="{{ asset('images/historyimg.jpg') }}" alt="Strawberry History"/></div>
    </div>
</section>

@endsection