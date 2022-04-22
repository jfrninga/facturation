<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserForm;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::user()){
            return redirect(route('dashboard'));
        }
        return view('welcome');
    }

    public function redirect()
    {
        return Socialite::driver('github')->stateless()->redirect();
    }

    public function register()
    {
        $githubUser = Socialite::driver('github')->stateless()->user();

        $user = User::where('github_id', $githubUser->id)->first();

        if ($user) {
            Auth::login($user);
            return redirect()->route('dashboard');
        }
        return view('users.register',
            [
                'github_id' => $githubUser->id,
                'name' => $githubUser->nickname,
                'email' => $githubUser->email,
            ]);

    }

    public function registration(RegisterUserForm $request)
    {

        $input = $request->only([
                'github_id',
                'name',
                'email',
                'contact_email',
                'phone',
                'address',
                'company_name',
                'ape',
                'siret',
                'account_user',
                'domiciliation',
                'rib',
                'iban',
                'bic',
        ]);
//        dd($input);
        $user = User::create($input);
        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('dashboard'));
    }

}
