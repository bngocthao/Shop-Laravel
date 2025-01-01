<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    use AuthorizesRequests;
    public function getLogin(Request $request) {
        return view('user.auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials, $request->has('remember_me'))) {
            return redirect()->intended('user.home');
        } else {
            dd(123);
        }
    }

    public function getRegister(Request $request) {
        return view('user.auth.signup');
    }

    public function register(AuthenticateRequest $request) {
//        dd(isset($request->iAgree));
        try {
            DB::beginTransaction();
            $user = User::create([
                'name' => strstr($request->email, '@', true),
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            DB::commit();
            return response()->json(['success' => true, 'message' => 'Account created successfully.' ]);

        } catch (\Exception $e) {
            DB::rollBack();
            // Log the error
            Log::error('Register error occurred:', [
                'error' => $e->getMessage(),
            ]);
            return response()->json(['success' => false, 'message' => 'Cannot create account, something went wrong']);
        }


    }
}
