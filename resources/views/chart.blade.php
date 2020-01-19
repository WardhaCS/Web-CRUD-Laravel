@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Chart') }}</div>
                <div class="card-body">
		<canvas id="myChart"></canvas>
		<?php $d=1300; ?>
		
		<script>

		var ctx = document.getElementById('myChart').getContext('2d');
		var chart = new Chart(ctx, {
		    // The type of chart we want to create
		    type: 'bar',

		    // The data for our dataset
		    data: {
	        labels: [
		@foreach($chL as $c)
                        {{$c->year}}{{','}}
                @endforeach

		],
	        datasets: [{label: 'Male', backgroundColor: 'rgb(255, 99, 132)', borderColor: 'rgb(255, 99, 132)', data: [

		@foreach($chL as $c)
                        {{$c->jumlah}}{{','}}
                @endforeach

		]},
			   {label: 'Female',backgroundColor: 'rgb(255, 99, 255)',borderColor: 'rgb(255, 99, 255)',data: [
		
		@foreach($chP as $c)
                        {{$c->jumlah}}{{','}}
                @endforeach

		]}]},

	    // Configuration options go here
	    options: {}
	});
	</script>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
