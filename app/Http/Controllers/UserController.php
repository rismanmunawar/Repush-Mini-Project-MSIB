<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view("user.profile", compact('user'));
    }

    public function update(UserCreateRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);

            $user->email = $request->input("email");
            $user->username = $request->input("username");
            $user->nohp = $request->input("nohp");
            $user->alamat = $request->input("alamat");
            $user->save();

            DB::commit();
            return redirect()->route('user.profile')->with('success', 'User updated successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Failed to update User', ['error' => $th->getMessage()]);

            return redirect()->back()->with([
                'error' => 'Failed to update User',
                'info' => $th->getMessage()
            ]);
        }
    }

    public function userResource(Request $request)
    {
        $user = User::first();
        return new UserResource($user);
    }
}
