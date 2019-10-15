@extends('layouts.html')

@section('title', 'Failure')

@section('body')
{{-- body --}}
<div id="audio_box">
    <audio src="{{ secure_asset('storage/audio/hotaru.mp3') }}" autoplay loop controls>
        <p>音声の再生に対応したブラウザをインストールしてください。</p>
    </audio>
</div>
<script src="{{secure_asset('/js/failure/message.js')}}"></script>
{{-- /body --}}
@endsection