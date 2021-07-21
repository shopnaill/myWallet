@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   
                      <div class="row">
                          <div class="col-md-4">
                              <a href="{{route('projects')}}">
                            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Projects</div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$projects}}</h5>
                                 </div>
                              </div>
                            </a>
                          </div>

                          <div class="col-md-4">
                            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Balance</div>
                                <div class="card-body">
                                  <h5 class="card-title">{{$my_balance}} EGP</h5>
                                 </div>
                              </div>
                          </div>



                          <div class="col-md-4">
                            <a href="{{route('clients')}}">
                          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                             <div class="card-header">Clients</div>
                             <div class="card-body">
                               <h5 class="card-title">{{$clients}}</h5>
                           </div>
                        </div>
                         </a>
                      </div>

                      





                      </div>

                  </div>



                </div>
            </div>

                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header">{{ Auth::user()->name }}</div>
        
                        <div class="card-body">
                           
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="card text-dark  mb-3" style="max-width: 18rem;">
                                       <div class="card-header"><strong>Wallet</strong>  <div style="float: right"><a href="{{route('wallet.withdraw')}}" class="btn btn-danger"><i class="fa fa-minus"></i></a> <a href="{{route('wallet.create')}}" class="btn btn-danger"><i class="fa fa-plus"></i></a></div> </div>
                                       <div class="card-body">
                                          <a style="color: #333;text-decoration: none;" href="{{route('wallet')}}">
                                            <p>My current balance</p>
                                            <h1 class="card-title">{{$my_wallet}} EGP</h1>
                                          </a>
                                     </div>
                                  </div>
                                </div>
                              </div>

                        </div>
                    </div>




                </div>


                <div class="col-md-8">
                    <br><br>

                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
        
                        <div class="card-body">
                           
                              <div class="row">
                                   <div class="col-md-12">
                                    <canvas id="myChart" width="400" height="400"></canvas>

                                   </div>
                              </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>

@endsection