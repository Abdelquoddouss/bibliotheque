<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\User;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function index()
    {
        $users = User::with('role')->paginate(1);
       return view('liste',compact('users'));

    }

    public function create()
    {
        // Logique pour afficher le formulaire de création d'utilisateur
    }

    public function store(Request $request)
    {
        // Logique pour traiter le formulaire de création d'utilisateur
    }

    public function show($id)
    {
        // Logique pour afficher les détails d'un utilisateur spécifique
    }

    public function edit($id)
    {
        // Logique pour afficher le formulaire de modification d'utilisateur
    }

    public function update(Request $request, $id)
    {
        // Logique pour traiter le formulaire de modification d'utilisateur
    }

    public function destroy($id)
    {
        // Logique pour supprimer un utilisateur
    }
}

