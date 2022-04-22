<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class Form
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $user =User::user();

        if ($user && $user->is_complete) {
            return $next($request);
        } elseif($user && ! $user->is_complete){
            return redirect(route('index'))->with('not-allowed', 'Please complete the form');
        }

        return redirect(route('auth.register'));

    }
}
