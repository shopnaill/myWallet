@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <h2 class="text-center">Project Balance | 
             @php
                 $total = 0;
             @endphp
            @foreach ($balances as $balance)
                   @php
                       $total = $total +=$balance->price;
                   @endphp
            @endforeach
           <strong><span style="color: green"> {{$total}} EGP</span></strong>

         </h2>
        <div class="col-md-12">
            <div style="padding: 25px" class="card">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($balances as $balance)
                         <tr>
                            <td>{{$balance->project->name}}</td>
                            <td>
                                <form action="" method="post">
                                <input step="0.01" type="number" width="50%" name="price" class="form-control" value="{{$balance->price}}" id="price"> 
                                <input id="submit-input" type="submit" style="display: none" value="">   
                                 </form> EGP
                                </td>
                            <td>{{$balance->date}}</td>
                            <td>
                                <label for="submit-input" class="btn btn-success btn-sm" href="#">Save</label>    
                                <label class="btn btn-danger btn-sm" href="#">Delete</label>    
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
