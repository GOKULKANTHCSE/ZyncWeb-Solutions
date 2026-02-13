@extends('layouts.app')

@section('content')
<section class="section-pad" style="background: var(--bg-light); padding-top: 10rem;">
    <div class="container" style="max-width: 900px;">
        <h1 class="fade-in" style="font-size: 3.5rem; margin-bottom: 1rem; color: #231F20;">{{ $title }}</h1>
        <p class="fade-in" style="color: var(--text-muted); margin-bottom: 4rem;">Last Updated: {{ $last_updated }}</p>

        <div class="legal-content">
            @foreach($sections as $section)
                <div class="fade-in" style="margin-bottom: 3rem;">
                    <h2 style="color: var(--accent-blue); margin-bottom: 1rem; font-size: 1.8rem;">{{ $section['heading'] }}</h2>
                    <p style="color: var(--text-main); line-height: 1.8; font-size: 1.1rem;">{{ $section['content'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
