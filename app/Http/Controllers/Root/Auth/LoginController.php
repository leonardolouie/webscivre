<?php

namespace App\Http\Controllers\Root\Auth;

//use Notify;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Alert;
use App\user;
class LoginController extends Controller
{
    /**
     * Instance of Auth
     * @var object
     */
    protected $auth;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function showLoginForm()
    {
        
            
            $result = User::all();

            if($result->isEmpty())

            {

          
              return redirect('/register');
            }

              return view('root.auth.login');

    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|string|max:255',
            'password'  => 'required|string|min:6|max:255'
        ]);

 

        // if login attempt is successful
        if ($this->attempt($request)) {
            $request->session()->regenerate();

           // Notify::success(greet(), '');
            Alert::success(Auth::user()->name, 'You have successfully logged in')->autoclose(3500);
            return redirect()->route('root.dashboard');
        }

        throw ValidationException::withMessages([
            'name' => [trans('auth.failed')]
        ]);

        return back();
    }

    /**
     * Try logging-in to the application.
     * @param  Request $request
     * @return boolean
     */
    protected function attempt(Request $request)
    {
        $username = filter_var(
                        $request->input('name'), FILTER_VALIDATE_EMAIL
                    ) ? 'email' : 'name';

        return  $this->auth::attempt([
                    $username   => $request->input('name'),
                    'password'  => $request->input('password'),
                ], $request->filled('remember'));
    }

    /**
     * Try logging-out from the application.
     * @param  Request $request
     * @return redirect
     */
    public function logout(Request $request)
    {
        $this->auth::guard()->logout();

        $request->session()->invalidate();

        return redirect()->route('root.login');
    }
}
