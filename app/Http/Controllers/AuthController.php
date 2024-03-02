<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __invoke()
    {
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }

    public function doLogin(LoginRequest $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('contact.index'));
        }

        return redirect()->route('auth.login')->withErrors([
            'first_name' => 'firs_name invalid',
            'last_name' => 'last_name invalid',
            'password' => 'password invalid',
        ])->onlyInput('first_name', 'last_name', 'password');

    }

    public function postRegister(RegisterRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
//            // Création d'un nouvel utilisateur


            User::create([
                'first_name' => $validated['first_name'],
                'last_name' => $validated['last_name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password']),
                'birthdate' => $validated['birthdate'],
                'role_id' => 1,
                'sex' => $validated['sex'],
                'address' => $validated['address'],
                'phone' => $validated['phone'],
                'avatar' => $request->hasFile('avatar') ? $request->file('avatar')->store('avatar', 'public') : null,
            ]);
//            $user = new User([
//                'first_name' => $request->input('first_name'),
//                'last_name' => $request->input('last_name'),
//                'email' => $request->input('email'),
//                'password' => bcrypt($request->input('password')),
//                'birthdate' => $request->input('birthdate'),
//                'role_id' => $roleUser->id,
//                'sex' => $request->input('sex'),
//                'address' => $request->input('address'),
//                'phone' => $request->input('phone'),
//                'avatar' => $request->hasFile('avatar') ? $request->file('avatar')->store('avatar', 'public') : null,
//            ]);
            // Sauvegarde de l'utilisateur dans forum_db
//            $user->save();

            // Redirection vers une page aprés la création de l'utilisateur
            return redirect()->route('contact.index')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Log des erreurs
            \Log::error('Erreur lors du traitement du formulaire:', ['exception' => $e]);
            // Redirection avec un message d'erreur
            return redirect()->route('auth.register')->with('error', 'Une erreur s\'est produite lors du traitement du formulaire.');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
