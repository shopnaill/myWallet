<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upcoming;
use App\Models\Wallet;
use Auth;

class UpcomingController extends Controller
{
    //

    public function create()
    {
         return view('upcoming.create');
    }

    public function save(Request $request)
    {
        $come = new Upcoming();

        $come->amount = $request->amount;
        $come->info = $request->info;
        $come->start_at = $request->start_at;
        $come->type = $request->type;
        $come->user_id  = Auth::user()->id;

        $come->save();
          $type ='';
        if ($come->type == 1)
        {
            $type =  '<span class="badge badge-danger">' . $come->amount . 'EGP</span> ';
        }else
        {
            $type =  '<span class="badge badge-success">' . $come->amount . 'EGP</span> ';
        }
       $upData =  '<tr style=" position: relative; ">      
        <td class="footable-first-visible" style="display: table-cell;">
                <div class="media">
                    <div class="figure avatar60 rounded-circle align-self-start bg-purple text-white border-0">' . mb_substr($come->info,0,1) . '</div>
                    <div class="media-body">
                        <h5 class="time-title p-0">' . $come->info . '</h5>
                        ' . $come->type . '
                    </div>
                </div>
            </td>
            <td style="display: table-cell;">
                <h5 class="time-title p-0">
                    
                    ' . $type . '
 
                </h5>
             </td>
            <td style="display: table-cell;"><span class="badge badge-info"><i class="icon fa fa-calendar"></i>' . $come->start_at . '</span></td>
            <td class="footable-last-visible" style="display: table-cell;">
                <form action="' . route('upcoming.save_up') . '" method="post">
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                    
                    <input type="hidden" value="'  . $come->amount . '" name="amount">
                    <input type="hidden" value=" ' . $come->info . ' " name="info">
                    <input type="hidden" value=" ' . $come->type . '" name="type">
                    <input type="hidden" value=" ' . $come->id . '" name="id">
                    <input id="save_' . $come->id . '" type="submit" style="display: none;" value="">
                </form>
                <form action="'.route('upcoming.delete') .'" method="post">
                <input type="hidden" name="_token" value="' . csrf_token() . '">
                <input type="hidden" value="' . $come->id . '" name="id">
                    <input id="delete_' .$come->id . '" type="submit" style="display: none;" value="">
                </form>
                <label style=" right: 75px; " for="delete_' . $come->id . '" class="btn btn-danger btn-sm c-btn"><i class="fa fa-times"></i></label>
                <label for="save_' . $come->id . '" class="btn btn-success btn-sm c-btn"><i class="fa fa-check"></i></label>
            </td>
        </tr>';


        return response()->json(['data'=>$upData]);

     }


    public function save_up(Request $request)
    {
        $wallet = new Wallet();

        $wallet->amount = $request->amount;
        $wallet->info = $request->info;

        if ($request->type == 1)
        {
            $wallet->type = $request->type;
        }
        $wallet->user_id  = Auth::user()->id;

        $wallet->save();

        $up = Upcoming::findOrFail($request->id);
        $up->state = 1;
        $up->save();

        return redirect()->back();
    }

    
    public function delete(Request $request)
    {
        Upcoming::where('id',$request->id)->delete();
        
        return redirect()->back();

    }
    
}
