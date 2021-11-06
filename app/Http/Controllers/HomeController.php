<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Balance;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Upcoming;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projects = Project::count();
        $balances = Balance::orderBy('date', 'ASC')->get();
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();
        $clients  = User::where('id','<>',1)->count();
        $upcoming  = Upcoming::where('user_id',Auth::user()->id)->whereNull('state')->get();
        $my_balance = 0;
        $my_wallet = 0;

        foreach ($wallet as $w)
        {
            if ($w->type == null)
            {
                $my_wallet = $my_wallet += $w->amount;
            }

            if ($w->type == 1)
            {
                $my_wallet = $my_wallet -= $w->amount;
            }


        }

        foreach ($balances as $balance)
        {
 
                $my_balance = $my_balance += $balance->price;
        }

        return view('home',compact('projects','my_balance','clients','my_wallet','balances','upcoming'));
    }
}
