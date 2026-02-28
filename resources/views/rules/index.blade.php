@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero" style="background-image: url('{{ asset('images/Hero-Background.jpg') }}'); background-size: cover; background-position: center;">
    <div class="hero-text">
        <h1>STRAW<span>BERRY</span></h1>
        <p class="subtitle">Rules</p>
    </div>
</section>

<!-- Rules -->
<section class="rules-section">


    <div class="rules-container">
        @forelse ($rules as $rule)
        <div class="rule-card">
            <h3 class="rule-category">{{ $rule->category }}</h3>
            <div class="rule-content">
                @foreach (explode("\n", $rule->content) as $line)
                    @if (str_starts_with(trim($line), '* '))
                        <div class="rule-item">
                            <span class="rule-bullet">✦</span>
                            <p>{{ ltrim(trim($line), '* ') }}</p>
                        </div>
                    @elseif (str_starts_with(trim($line), '- '))
                        <div class="rule-sub-item">
                            <span class="rule-sub-bullet">·</span>
                            <p>{{ ltrim(trim($line), '- ') }}</p>
                        </div>
                    @elseif (trim($line) !== '')
                        <p class="rule-text">{{ $line }}</p>
                    @endif
                @endforeach
            </div>
        </div>
        @empty
            <p>No rules yet.</p>
        @endforelse
    </div>
</section>

@endsection