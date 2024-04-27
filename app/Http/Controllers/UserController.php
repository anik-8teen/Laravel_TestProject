<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::all();
        return $user; 
        //redirect()->route('/');
        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique|max:255',
            'email' => 'required|unique|max:255',
            'password' => 'required',
            'user_type'=>'required|max:255',
        ]);
        $user=User::create($validated());
        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::find($id);
        return $user;
    }

    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $user=User::find($id);
        $validated = $request->validate([
            'name' => 'required|unique|max:255',
            'email' => 'required|unique|max:255',
            'password' => 'required',
            'user_type'=>'required|max:255',
        ]);
        $user.save($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=User::find($id);
        $user.delete();
    }
}
