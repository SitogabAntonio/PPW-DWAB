<?php

namespace App\Http\Resources;

// app/Http/Controllers/ProfileController.php

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'profile_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Contoh validasi untuk gambar
            'no_telp' => 'nullable|string|max:20',
            'gender' => 'nullable|in:male,female', // Hanya menerima nilai male atau female
            'status' => 'nullable|string|max:255',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Update data user
        $user->update($request->all());

        return redirect()->route('profile.edit', $user->id)
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
