@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Pemesanan') }}</div>

                <div class="card-body">
		<div id="add"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="add"></div>
<script>
  window.myId = "{{ Auth::user()->id }}"
  window.myVar = "{{ Auth::user()->name }}"
</script>
@endsection
