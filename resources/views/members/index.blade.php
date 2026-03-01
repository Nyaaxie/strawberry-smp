@extends('layouts.app')

@section('content')

<!-- Hero -->
<section class="hero" style="background-image: url('{{ asset('images/Hero-Background.jpg') }}'); background-size: cover; background-position: center;">
    <div class="hero-text">
        <h1>STRAW<span>BERRY</span></h1>
        <p class="subtitle">Members</p>
    </div>
</section>

<!-- Members Grid Section -->
<section class="members-section">
   <p class="subtitle section">MEMBERS</p>


    <!-- Avatar Grid -->
    <div class="members-grid">
        @foreach ($members as $member)
        <div class="member-card platform-border-{{ $member->platform }}">
            <div class="member-avatar">
                <a href="#bio-{{ $member->id }}" aria-label="View {{ $member->username }} bio">
                    <img src="{{ $member->avatar 
                        ? asset('storage/' . $member->avatar) 
                        : 'https://mc-heads.net/avatar/' . $member->username . '/128' }}" 
                         alt="{{ $member->username }}">
                </a>
            </div>
            <p class="member-username">{{ $member->username }}</p>
            <span class="member-role-badge role-{{ Str::slug($member->role) }}">{{ ucfirst($member->role) }}</span>
        </div>
        @endforeach
    </div>

    <!-- Role Legend -->
    <div class="role-legend">
        <div class="legend-group">
            <p class="legend-label">Platform</p>
            <div class="legend-items">
                <div class="legend-item">
                    <span class="legend-square java"></span> Java
                </div>
                <div class="legend-item">
                    <span class="legend-square bedrock"></span> Bedrock
                </div>
            </div>
        </div>
        <div class="legend-divider"></div>
        <div class="legend-group">
            <p class="legend-label">Ranks</p>
            <div class="legend-items">
                <div class="legend-item"><span class="legend-circle owner"></span> Owner</div>
                <div class="legend-item"><span class="legend-circle co-admin"></span> Co-Admin</div>
                <div class="legend-item"><span class="legend-circle unbreaking"></span> Unbreaking</div>
                <div class="legend-item"><span class="legend-circle loyalty"></span> Loyalty</div>
                <div class="legend-item"><span class="legend-circle berry"></span> Berry</div>
                <div class="legend-item"><span class="legend-circle member"></span> Member</div>
                <div class="legend-item"><span class="legend-circle salingkitkit"></span> Salingkitkit</div>

            </div>
        </div>
    </div>
</section>

<!-- Bio Cards Section -->
<section class="bio-section">
    @foreach ($members as $member)
    @if ($member->bio)
    <div id="bio-{{ $member->id }}" class="bio-card accent-{{ Str::slug($member->role) }}">

 
        <div class="doodle doodle-tl">🌸</div>
        <div class="doodle doodle-tr">⭐</div>
        <div class="doodle doodle-bl">🍓</div>
        <div class="doodle doodle-br">🌼</div>

      
        <div class="bio-left">
    <div class="bio-avatar-wrap">
        <img src="{{ $member->avatar 
            ? asset('storage/' . $member->avatar) 
            : 'https://mc-heads.net/avatar/' . $member->username . '/128' }}" 
             alt="{{ $member->username }}" class="bio-avatar">
    </div>

   
   <form action="/members/{{ $member->id }}/avatar" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="secret" value="strawberry2024">
    <input type="file" name="avatar" accept="image/*">
    <button type="submit">Upload Avatar</button>
</form>

    <div class="bio-name-row">
        <span class="bio-star">✦</span>
        <h3 class="bio-name">{{ $member->username }}</h3>
        <span class="bio-star">✦</span>
    </div>
    <span class="bio-role-tag role-{{ Str::slug($member->role) }}">{{ ucfirst($member->role) }}</span>
    <div class="bio-platform">
        <span class="platform-dot {{ $member->platform }}"></span>
        {{ ucfirst($member->platform) }}
    </div>
</div>
       
        <div class="bio-right">
            <div class="notepad">
                <div class="notepad-top">
                    <span class="crayon accent-crayon-{{ Str::slug($member->role) }}">✏️</span>
                </div>
                <div class="notepad-lines">
                    <p class="notepad-text">{{ $member->bio }}</p>
                    @if ($member->favorite_color)
                    <p class="notepad-detail">
                        🎨 Fave Color: <span class="accent-text">{{ $member->favorite_color }}</span>
                    </p>
                    @endif
                    @if ($member->joined_at)
                    <p class="notepad-detail">
                        📅 Joined: <span class="accent-text">{{ \Carbon\Carbon::parse($member->joined_at)->format('F d, Y') }}</span>
                    </p>
                    @endif
                    <p class="notepad-detail">
                        💻 Platform: <span class="accent-text">{{ ucfirst($member->platform) }}</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
    @endif
    @endforeach
</section>

@endsection