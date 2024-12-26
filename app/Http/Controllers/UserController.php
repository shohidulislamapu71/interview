<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function CreateUser(Request $request)
    {
        // Validate input
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        if ($validatedData->fails()) {
            return response()->json(['errors' => $validatedData->errors()], 422);
        }

        // Retrieve validated data
        $data = $validatedData->validated();

        // Create user object
        $User = new User();
        $User->name = $data['name'];
        $User->email = $data['email'];
        $User->password = bcrypt($data['password']);
        $User->save();

        // Return response
        return response()->json([
            'Body' => $User,
        ]);
    }
}
