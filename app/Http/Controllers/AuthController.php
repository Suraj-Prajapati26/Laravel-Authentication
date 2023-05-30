<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\UserModel;
use App\Models\Game;
use App\Models\Game_players;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Wallet_trans;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function registration()
    // {
    //     return view('auth.registration');
    // }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("login")->withFail('Invalid Password or Email!!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    // public function postRegistration(Request $request)
    // {  
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:6',
    //         'confirm' => 'required|same:password'
    //     ]);


    //     $data = $request->all();
    //     $check = $this->create($data);

    //     return redirect("/login")->withSuccess('Great! You have Successfully Registered');
    // }
    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            $user = UserModel::all();
            $count = count($user);
            $sum = Wallet_trans::where('Debit_Credit', 'Deposit')->sum('Amount');
            echo $sum;
            $data = compact('sum', 'count');
            return view('dashboard')->with($data);
        }

        return redirect("login")->withFail('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    public function side_games()
    {
        $games = Game::select('game.*', DB::raw('count(game_players.Game_ID) as noofplayers'))
            ->leftJoin('game_players', 'game.Game_ID', '=', 'game_players.Game_ID')
            ->groupBy('game.Game_ID')
            ->with('game_players')
            ->get();
        // echo $games;
        return view('games', compact('games'));
    }


    public function side_user()
    {


        $user =  UserModel::all();
        // echo $user;
        $data = compact('user');
        return view('users')->with($data);
    }
    public function side_notification()
    {
        return view('notification');
    }
    public function side_winners()
    {
        return view('winners');
    }
    public function side_deposits()
    {
        $data = Wallet_trans::with('user')->where('Debit_Credit', 'Deposit')->get();
        $comp = compact('data');
        // echo "<pre>";
        // echo $data;
        return view('deposits')->with($comp);
    }

    // retrieving data---------------------------------------



    public function changepassword()
    {
        return view('auth.changepassword');
    }
    public function updatepassword(Request $pswd)
    {
        $pswd->validate([
            'current' => 'required',
            'New_password' => 'required|min:6',
            'Confirm_password' => 'required|same:New_password',

        ]);

        if (!Hash::check($pswd['current'], auth()->user()->password)) {
            return back()->withFail('Old Password does not match');
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($pswd['New_password'])
        ]);

        return redirect('/')->withSuccess('Password changed successfully! Try to Login again.....');
    }

    public function user_details($id)
    {
        $user = UserModel::find($id);
        $depo = Wallet_trans::where('userid', $id)->where('Debit_Credit', 'Deposit')->get();
        $wdraw = Wallet_trans::where('userid', $id)->where('Debit_Credit', 'Withdraw')->get();
        // echo $wdraw;
        $data = compact('user', 'depo', 'wdraw');
        return view('user_details')->with($data);
    }
}
