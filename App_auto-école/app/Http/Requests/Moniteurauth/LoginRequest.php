<?php

namespace App\Http\Requests\Moniteurauth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules;
class LoginRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

  
    public function rules()
    {
        return [
            'user_name' => ['required', 'string','max:15'],
            'password' =>  ['required','min:8', Rules\Password::defaults()]
        ];
     
    }
    public function message()
    {
        return [
        'user_name.required'=>'Le champ du nom d\'utilisateur est obligatoire.',
        'password.required'=>'Le champ du mot de passe est obligatoire.'
        ];
    } 

    
    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        if (! Auth::guard('moniteur')->attempt($this->only('user_name','password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'user_name' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
    }

   
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'user_name' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    public function throttleKey()
    {
        return Str::transliterate(Str::lower($this->input('user_name')).'|'.$this->ip());
    }
}