@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <h2 class="text-center">My Wallet | 

            @php
            $total =0;
             @endphp
            @foreach ($wallet as $w)
             @php
             if ($w->type == null)
             {
                $total = $total +=$w->amount;
             }
             if ($w->type == 1)
             {
                $total = $total -=$w->amount;
             }
             @endphp
            @endforeach
         <strong><span style="color: green"> {{$total}} EGP</span></strong>
         </h2>
         <br>
        <div class="col-md-12">
            <a href="{{route('wallet.withdraw')}}" class="btn btn-danger"><i class="fa fa-minus"></i></a> <a href="{{route('wallet.create')}}" class="btn btn-danger"><i class="fa fa-plus"></i></a>            <br>
            <br>
            <div style="padding: 25px" class="card">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Info</th>
                            <th>Amount</th>
                            <th>Name</th>
                            <th>Type</th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($wallet as $w)
                         <tr>
                            <td>{{$w->created_at}}</td>
                            <td>{{$w->info}}</td>
                            <td>
                                @if ($w->type == null)
                                <span style="color: green;font-weight: bold;">+{{$w->amount}}</span>
                                @elseif ($w->type == 1)
                                 <span style="color: red;font-weight: bold;">-{{$w->amount}}</span>
                                @endif 
                                </td>
                            <td>{{$w->p_type ? $w->pr_type->name : 0}}</td>
                            <td>
                                @if ($w->type == null)
                                <span style="color: green;font-weight: bold;">{{"Addation"}}</span>
                                @elseif ($w->type == 1)
                                 <span style="color: red;font-weight: bold;">{{"Withdraw"}}</span>
                                @endif 
                             </td>
          
 
                          </tr>
                         @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection


@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<script>
    $(document).ready( function () {
       $('#table_id').DataTable();
    });
</script>
@endsection
