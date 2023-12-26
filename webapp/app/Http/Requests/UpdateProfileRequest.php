<?php

// app/Http/Requests/UpdateProfileRequest.php

// app/Http/Requests/UpdateProfileRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            'profile_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_telp' => 'nullable|string|max:20',
            'gender' => 'nullable|in:male,female',
            'status' => 'nullable|string|max:255',
            // tambahkan validasi lainnya sesuai kebutuhan
        ];
    }
}
