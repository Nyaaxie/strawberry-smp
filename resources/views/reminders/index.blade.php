@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero" style="background-image: url('{{ asset('images/Hero-Background.jpg') }}'); background-size: cover; background-position: center;">
    <div class="hero-text">
        <h1>STRAW<span>BERRY</span></h1>
        <p class="subtitle">Reminders</p>
    </div>
</section>

<!-- Reminders -->
<section class="reminders-section">


    <div class="reminders-container">
        @forelse ($reminders as $reminder)
        <div class="reminder-card">
            <h3 class="reminder-category">{{ $reminder->title }}</h3>
            <div class="reminder-content">
                @foreach (explode("\n", $reminder->content) as $line)
                    @if (str_starts_with(trim($line), '-'))
                        <li class="reminder-bullet">{{ ltrim($line, '- ') }}</li>
                    @elseif (str_starts_with(trim($line), '/'))
                        <div class="reminder-code"><code>{{ $line }}</code></div>
                    @elseif (str_starts_with(trim($line), 'http'))
                        <a href="{{ trim($line) }}" target="_blank" class="reminder-link">{{ trim($line) }}</a>
                    @elseif (trim($line) !== '')
                        <p>{{ $line }}</p>
                    @else
                        <br>
                    @endif
                @endforeach
            </div>
        </div>
        @empty
            <p class="no-reminders">No reminders yet.</p>
        @endforelse
    </div>
</section>

@endsection