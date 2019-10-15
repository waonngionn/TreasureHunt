@extends('layouts.html')

@section('title', 'Failure')

@section('body')
{{-- body --}}
<div id="audio_box">
    <audio src="{{ asset('storage/audio/hotaru.mp3') }}" autoplay loop controls>
        <p>音声の再生に対応したブラウザをインストールしてください。</p>
    </audio>
</div>
{{-- /body --}}
@endsection