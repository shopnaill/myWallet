<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 
    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    
    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footable.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.custom-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-helpdesk.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

</head>
<body>
    <div id="app">
        <div class="loader-logo" style="display: none;">
            <img src="{{asset('imgs/logo-up.png')}}" alt="">
            <br>
            <div class="loader-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="wrapper"  >
            @if (!isset($nav))
            @include('layouts.navbar')
            @include('layouts.sidebar')
            @endif
        
                @yield('content')
            @include('layouts.sideoption')
        </div>
        @include('layouts.footer')

    </div>

 
    	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>

	<!--Cookie js for theme chooser and applying it --> 
	<script src="{{asset('js/jquery.cookie.js')}}"></script> 

	<!-- Circular progress -->
	<script src="{{asset('js/jquery.custom-scrollbar.min.js')}}"></script>	

	<!-- Circular progress -->
	<script src="{{asset('js/circle-progress.min.js')}}"></script>

	<!-- Sparklines chartsw -->
	<script src="{{asset('js/jquery.sparkline.min.js')}}"></script>
    
    <!-- chart js -->
	<script src="{{asset('js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('js/utils.js')}}"></script>
    
	<!-- jvectormap JavaScript -->
	<script src="{{asset('js/jquery-jvectormap.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-asia-mill.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-africa-mill.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-us-aea.js')}}"></script>
	<script src="{{asset('js/jquery-jvectormap-in-mill.js')}}"></script>

	<!-- Footable  -->
	<script src="{{asset('js/footable.min.js')}}"></script>
    
	<!-- Other JavaScript -->
	<script src="{{asset('js/main.js')}}"></script>
    @yield('scripts')  

    <script>
        "use strict";
        donutchart();
        function donutchart(){
             var ctx3 = document.getElementById("donutchart-area").getContext("2d");
                    window.myDoughnut = new Chart(ctx3, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                        ],
                        backgroundColor: [
                            
                            '#673ab7',
                            '#ec4061',
                            '#ffb803',
                            '#66cd2e',
                            '#11a0f8',
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Eagle Ltd",
                        "Foogle Ltd",
                        "Chinmayaar",
                        "OpenField",
                        "MarsXspace"
                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Doughnut Chart'
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            setInterval(function(){
                myDoughnut.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });
                });
                window.myDoughnut.update();      
            }, 2000);
            
            
            /* Footable */
            $('.footable').footable();


            
        }
        
        var gdpData = {
			"AF": 16.63,
			"AL": 11.58,
			"AU": 158.97,
			"IN": 100.97,
		};
		$('#mapwrap2').vectorMap({
			map: 'world_mill',
			regionStyle: {
				initial: { fill: '#b7c8ff' }
			},
			series: {
				regions: [{
					values: gdpData,
					scale: ['#b7c8ff', '#3158d8'],
					normalizeFunction: 'polynomial'
				}]
			},
			onRegionTipShow: function (e, el, code) {
				el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
			}
		});
        $('#mapasiawrap').vectorMap({
			map: 'asia_mill', regionStyle: {
				initial: { fill: '#7a99ff' }
			}
		});


    </script>
</body>
</html>
