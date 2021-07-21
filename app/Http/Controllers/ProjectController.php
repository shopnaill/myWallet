<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use App\Models\Balance;
use App\Models\Wallet;
use Auth;

class ProjectController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $projects = Project::get();
        return view('projects.index',compact('projects'));
    }

    public function balance_index($id)
    {
        $balances = Balance::where('project_id',$id)->get();
        return view('balances.index',compact('balances'));
    }

    public function create()
    {
        $users = User::where('id','<>',1)->get();
        return view('projects.create',compact('users'));
    }

    public function balance_create($project_id)
    {
         return view('balances.create',compact('project_id'));
    }

    public function save(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;
        $project->type = $request->type;
        $project->link = $request->link;
        $project->user_id  = $request->user_id;

        $project->save();

        return redirect()->back();
    }


    public function balance_save(Request $request)
    {
        $balance = new Balance();
        $balance->price = $request->price;
        $balance->info = $request->info;
        $balance->date = $request->date;
        $balance->project_id = $request->project_id;
        $balance->save();



        if (!$request->wallet)
        {
            $wallet = new Wallet();

            $wallet->amount = $request->price;
            $wallet->info = $request->info;
            $wallet->user_id  = Auth::user()->id;
    
            $wallet->save();
        }

        return redirect()->route('balance.index',$request->project_id);
    }

}
