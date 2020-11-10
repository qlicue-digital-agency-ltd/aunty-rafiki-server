<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function getRoles()
    {
        $roles = Role::all();
        foreach ($roles as $role) {
        }
        return response()->json(['roles' => $roles]);
    }


    public function getRole($roleId)
    {
        $role = Role::find($roleId);

        if (!$role) return response()->json(['error' => 'Role Not Found'], 404);

        return response()->json(['role' => $role], 200);
    }

    public function postRole(Request $request)
    {

        $role =  Role::create(['name' => $request->name]);

        return response()->json(['role' => $role], 201);
    }

    public function putRole(Request $request, $roleId)
    {
        $role = Role::find($roleId);

        if (!$role) return response()->json(['error' => 'Role Not Found'], 404);

        $role->update([
            'name' => $request->name,
        ]);

        return response()->json(['role' => $role], 201);
    }

    public function deleteRole($roleId)
    {
        $role = Role::find($roleId);

        if (!$role) return response()->json(['error' => 'Role Not Found'], 404);
        $role->delete();

        return response()->json(['role' => 'Role deleted successfully'], 201);
    }
}
