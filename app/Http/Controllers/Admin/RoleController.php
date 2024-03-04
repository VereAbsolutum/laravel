<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\RoleDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(RoleDataTable $roleDataTable)
    {
        return $roleDataTable->render('admin.roles.index');
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required', 'min:3']);
        Role::create($validated);
        return redirect()->route('admin.roles.index');
    }

    public function show(int $id)
    {
        $role = Role::findOrFail($id);

        return view('admin.roles.show')->with(compact('role'));
    }
}
