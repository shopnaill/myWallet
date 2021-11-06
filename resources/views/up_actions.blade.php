<div class="col-12 col-md-6 col-lg-8 col-xl-9 mb-3">
    <div class="card rounded-0 border-0">
        <div class="card-header">
            <h4 class="card-title d-inline-block">Upcoming Actions</h4> 
            <button data-toggle="modal" data-target="#AddUpcoming" class="btn btn-success float-right">Add new</button>
        </div>
        <div class="card-body p-0">
            <table class="table mb-0 footable footable-1 breakpoint-lg" style="">
                <thead class="d-none">
                    <tr class="footable-header">
                    <th class="footable-first-visible" style="display: table-cell;">Comapny Name</th>
                    <th data-breakpoints="xs" style="display: table-cell;">Tickets</th>
                    <th data-breakpoints="xs sm" style="display: table-cell;">Comment</th>
                    <th data-breakpoints="xs sm" class="footable-last-visible" style="display: table-cell;">Status</th>
                   </tr>
                </thead>
                <tbody id="up_data">
                    @foreach ($upcoming as $come)
                    <tr style=" position: relative; ">      
                        <td class="footable-first-visible" style="display: table-cell;">
                                <div class="media">
                                    <div class="figure avatar60 rounded-circle align-self-start bg-purple text-white border-0">{{mb_substr($come->info,0,1)}}</div>
                                    <div class="media-body">
                                        <h5 class="time-title p-0">{{$come->info}}</h5>
                                        {{$come->type}}
                                    </div>
                                </div>
                            </td>
                            <td style="display: table-cell;">
                                <h5 class="time-title p-0">
                                    @if ($come->type == 1)
                                    <span class="badge badge-danger">{{$come->amount}} EGP</span> 
                                    @else 
                                    <span class="badge badge-success">{{$come->amount}} EGP</span> 
            
                                    @endif
                                </h5>
                             </td>
                            <td style="display: table-cell;"><span class="badge badge-info"><i class="icon fa fa-calendar"></i> {{$come->start_at}}</span></td>
                            <td class="footable-last-visible" style="display: table-cell;">
                                <form action="{{route('upcoming.save_up')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$come->amount}}" name="amount">
                                    <input type="hidden" value="{{$come->info}}" name="info">
                                    <input type="hidden" value="{{$come->type}}" name="type">
                                    <input type="hidden" value="{{$come->id}}" name="id">
                                    <input id="save_{{$come->id}}" type="submit" style="display: none;" value="">
                                </form>
                                <form action="{{route('upcoming.delete')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$come->id}}" name="id">
                                    <input id="delete_{{$come->id}}" type="submit" style="display: none;" value="">
                                </form>
                                <label style=" right: 75px; " for="delete_{{$come->id}}" class="btn btn-danger btn-sm c-btn"><i class="fa fa-times"></i></label>
                                <label for="save_{{$come->id}}" class="btn btn-success btn-sm c-btn"><i class="fa fa-check"></i></label>
                            </td>
                        </tr>
                        @endforeach
                          
 </tbody>
            </table>
        </div>
    </div>
</div>