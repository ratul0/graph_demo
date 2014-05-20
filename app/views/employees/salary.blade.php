@extends('layouts.default')

@section('content')
	<div class="col-md-12">
		<div class="page-header">
			<h2>{{ $title }}</h2>
		</div>
		
      	<div class="col-md-8">
			
		<canvas id="monthly-salary" width="400" height="300">

		</canvas>
      	
    	</div>
    </div>

    <script type="text/javascript">
	(function(){
			var ctx = document.getElementById("monthly-salary").getContext("2d");
			var data = {
			labels : {{json_encode($name)}},
			datasets : [
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,1)",
					pointColor : "rgba(220,220,220,1)",
					pointStrokeColor : "#fff",
					data : {{json_encode($salary)}}
				}]
		};

		new Chart(ctx).Bar(data);
	})();
</script>


@stop

