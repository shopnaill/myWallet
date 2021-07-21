@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <h2 class="text-center">All Projects</h2>
         <br>
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('project.create')}}">Create Project</a>
            <br>
            <br>
            <div style="padding: 25px" class="card">
                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Description</th>
                            <th>Type</th>
                            <th>Link</th>
                            <th>Client</th>
                            <th>Balance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($projects as $project)
                         <tr>
                            <td>{{$project->name}}</td>
                            <td>{{$project->description}}</td>
                            <td>
                                @if ($project->type == 1)
                                 {{"Web"}}
                                @elseif ($project->type == 2)
                                {{"Mobile"}}
                                @else 
                                {{"Other"}}
                                @endif 
                             </td>
                            <td><a target="_blank" href="{{$project->link}}">Preview</a></td>
                            <td>{{$project->user->name}}</td>
                            <td>
                                @php
                                    $total =0;
                                    $p = new \App\Models\Project();
                                 @endphp
                                 @foreach ($p->balance($project->id) as $i)
                                     @php
                                         $total = $total +=$i->price;
                                     @endphp
                                 @endforeach
                                 <strong><span style="color: green"> {{$total}} EGP</span></strong>

                            </td>

                             <td>
                                <a href="{{route('balance_create',$project->id)}}" class="btn btn-info">+</a>   
                                <a href="{{route('balance.index',$project->id)}}" class="btn btn-primary">View</a>   
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
