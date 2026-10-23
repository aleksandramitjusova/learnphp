<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
{
$users = User::select('id', 'name', 'email')->get();
return view('users.index', compact('users'));
}
public function show(User $user)
{
return view('users.show', compact('user'));
}
public function edit(User $user)
{
    return view('users.edit', compact('user'));
}public function update(Request $request, User $user)
{
   $data = $request->validate([
    'name' => 'required|string|max:255',
    'email' => [
    'required',
    'email',
    'max:255',
    Rule::unique('users', 'email')->ignore($user->id),

],
]);
$user->update($data);
return redirect()->route('users.index');
}
public function destroy(User $user)
{
    $user->delete();
   return redirect()->route('users.index');
}
}