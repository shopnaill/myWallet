@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <h2 class="text-center">All Clients</h2>
        <div class="col-md-12">
            <div style="padding: 25px" class="card">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($users as $user)
                         <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
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
