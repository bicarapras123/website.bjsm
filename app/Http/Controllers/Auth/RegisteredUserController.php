<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        // Blokir akses jika sudah ada 2 user
        if (User::count() >= 2) {
            abort(403, 'Register sudah tidak bisa lagi, Karna Tampilan Ini Hanya Khusus Admin!');
        }
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        // Cek ulang kuota sebelum menyimpan data
        if (User::count() >= 2) {
            throw ValidationException::withMessages([
                'name' => 'Maaf, pendaftaran sudah ditutup.',
            ]);
        }

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'referral_code' => ['required', function ($attribute, $value, $fail) {
                if ($value !== '2026BJSMOFC') { 
                    $fail('Kode akses tidak valid.');
                }
            }],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referral_code' => strtoupper($request->referral_code),
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}