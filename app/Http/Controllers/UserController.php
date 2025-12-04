<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Get all users except admins (where is_admin = 0 or false)
        $users = User::where('is_admin', 0)->latest()->get();
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function destroy(User $user)
    {
        // Prevent deleting admins
        if ($user->is_admin) {
            return redirect()->route('users.index')->with('error', 'Cannot delete admin users.');
        }

        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
