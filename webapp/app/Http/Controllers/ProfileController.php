<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        $validatedData = $request->validated();

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->no_telp = $validatedData['no_telp'];
        $user->gender = $validatedData['gender'];
        $user->status = $validatedData['status'];

        // Menghapus foto profil lama jika ada
        if ($request->hasFile('profile_path')) {
            $path = 'uploads/profile_path/' . $user->profile_path;
            if (File::exists($path)) {
                File::delete($path);
            }

            $file = $request->file('profile_path');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/profile_path', $filename);
            $user->profile_path = $filename;
        }

        $user->save();

        return redirect()->route('profile.edit', $user->id)
            ->with('success', 'Profil berhasil diperbarui!');
    }
}
