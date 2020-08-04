<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\View;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $user = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
            ->get();

        $chart = Charts::database($user, 'bar', 'highcharts')
        ->title("Monthly new Register Users Chart")
        ->elementLabel("Total Users")
        ->dimensions(1000, 500)
        ->responsive(true)
        ->groupByMonth(date('Y'), true);


        return view('admin.users', compact('chart', 'users'));
    }

    /**
     * Search function
     */
    public function search(Request $request){
        $users = User::where('name', 'like', '%' . $request->input('name_') . '%')->get();
        $user = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
        ->get();
        $chart = Charts::database($user, 'bar', 'highcharts')
        ->title("Monthly new Register Users Chart")
        ->elementLabel("Total Users")
        ->dimensions(1000, 500)
        ->responsive(true)
        ->groupByMonth(date('Y'), true);


        return view('admin.users', compact('chart', 'users'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
        ->get();
        $chart = Charts::database($user, 'bar', 'highcharts')
        ->title("Monthly new Register Users Chart")
        ->elementLabel("Total Users")
        ->dimensions(1000, 500)
        ->responsive(true)
        ->groupByMonth(date('Y'), true);
        $user = User::find($id);
        return view('admin.editUser', compact('chart', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
        ->get();
        $chart = Charts::database($user, 'bar', 'highcharts')
        ->title("Monthly new Register Users Chart")
        ->elementLabel("Total Users")
        ->dimensions(1000, 500)
        ->responsive(true)
        ->groupByMonth(date('Y'), true);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);
        $user = User::find($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
        ]);
        $users = User::all();

        //dd($projects);
        return view('admin.users', compact('chart', 'users'));
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('status', 'User Deleted Successfully!');
    }
}
