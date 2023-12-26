<!-- resources/views/profile/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('profile.update', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <label for="name">Nama:</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <label for="profile_path">Foto Profil:</label>
            <input type="file" name="profile_path">

            <label for="no_telp">Nomor Telepon:</label>
            <input type="text" name="no_telp" value="{{ old('no_telp', $user->no_telp) }}">

            <label for="gender">Jenis Kelamin:</label>
            <select name="gender">
                <option value="male" {{ old('gender', $user->gender) == 'male' ? 'selected' : '' }}>Laki-laki</option>
                <option value="female" {{ old('gender', $user->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
            </select>

            <label for="status">Status:</label>
            <input type="text" name="status" value="{{ old('status', $user->status) }}">

            <!-- tambahkan input lainnya sesuai kebutuhan -->

            <button type="submit">Simpan</button>
        </form>
    </div>
@endsection
