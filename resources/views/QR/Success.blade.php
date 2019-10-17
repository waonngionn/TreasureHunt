@extends('layouts.html')

@section('title', 'Success')

@section('body')
{{-- body --}}
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">モーダルのタイトル</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!-- /.modal-header -->
      <div class="modal-body">
        <p>モーダルボディの本文。</p>
      </div><!-- /.modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
        <button type="button" class="btn btn-primary">変更を保存</button>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.5.16/p5.min.js"></script>
<script src="{{secure_asset('/js/success/particle.js')}}"></script>
<script src="{{secure_asset('/js/success/firework.js')}}"></script>
<script src="{{secure_asset('/js/success/sketch.js')}}"></script>
<script src="{{secure_asset('/js/success/message.js')}}"></script>
{{-- /body --}}
@endsection
