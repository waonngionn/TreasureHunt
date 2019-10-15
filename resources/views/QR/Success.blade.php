@extends('layouts.html')

@section('title', 'Success')

@section('body')
{{-- body --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.min.js"></script>
<script src="{{asset('/js/success/particle.js')}}"></script>
<script src="js/success/firework.js"></script>
<script src="js/success/sketch.js"></script>
{{-- /body --}}
@endsection