<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Http\RedirectResponse;


use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\DataTables\UsersDataTable;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('user.daftarPengguna');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.registrasi");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullname' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:1000'],
            'birthdate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'agama' => ['required', 'string', 'max:20'],
            'jenisKelamin' => ['required', 'numeric', 'in:0,1'],
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phoneNumber,
            'agama' => $request->agama,
            'jenisKelamin' => $request->jenisKelamin,
        ]);

        

        //Auth::login($user);

        return redirect()->route("user.daftarPengguna");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view("user.infoPengguna", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("user.editPengguna", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
      
        $updateUser = $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullName' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$request->id],
            'address' => ['required', 'string', 'max:1000'],
            'birthdate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'agama' => ['required', 'string', 'max:20'],
            'jenisKelamin' => ['required', 'numeric', 'in:0,1'],
        ]);

        User::findOrFail($request->id)->update([
            'username' => $request->username,
            'fullName' => $request->fullName,
            'email' => $request->email,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'phoneNumber' => $request->phoneNumber,
            'agama' => $request->agama,
            'jenisKelamin' => $request->jenisKelamin,
        ]);
        return redirect()->route('user.daftarPengguna');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

// Wijdan Ardra Fulvian 6706223137 46-04