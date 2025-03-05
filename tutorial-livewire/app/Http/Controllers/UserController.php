<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::query()->where('id', $id)->first();
        return view('livewire.components.show-data', [
            'user' => $user
        ]);
    }
}
