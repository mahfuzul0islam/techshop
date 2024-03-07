<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{
    public function AllPermission()
    {
        $permissions = Permission::all();
        return view('backend.pages.permission.all_permission', compact('permissions'));
    }//end method

    public function AddPermission()
    {
        return view('backend.pages.permission.add_permission');
    }
    public function StorePermission(Request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
            "group_name" => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Added',
            'alert-type' => 'success'
        );
        return redirect()->route('show.permission')->with($notification);
    }
    public function EditPermission($id)
    {
        $permission = Permission::findorFail($id);
        return view('backend.pages.permission.edite_permission', compact('permission'));
    }
    public function UpdatePermission(Request $request)
    {
        $per_id = $request->id;
        Permission::findorFail($per_id)->update([
            'name' => $request->name,
            "group_name" => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('show.permission')->with($notification);
    }

    public function DeletePermission($id)
    {
        Permission::findorFail($id)->delete();
        $notification = array(
            'message' => 'Permission Deleted',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }


    //this is the roles part
    public function AllRole()
    {
        $roles = Role::all();
        return view('backend.pages.role.all_role', compact('roles'));
    }//end method
    public function AddRole()
    {
        return view('backend.pages.role.add_role');
    }//end method

    public function StoreRole(Request $request)
    {
        Role::create([
            'name' => $request->name,
        ]);
        $notification = array(
            'message' => 'Roles Added',
            'alert-type' => 'success'
        );
        return redirect()->route('show.roles')->with($notification);
    }
    public function EditRole($id)
    {
        $role = Role::findById($id);
        return view('backend.pages.role.edite_role', compact('role'));
    }
    public function UpdateRole(Request $request)
    {
        $role_id = $request->id;
        Role::findorFail($role_id)->update([
            'name' => $request->name,
        ]);
        $notification = array(
            'message' => 'Roles Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('show.roles')->with($notification);
    }
    public function DeleteRole($id)
    {
        Role::findById($id)->delete();

        $notification = array(
            'message' => 'Role Deleted',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
    }

    //Role in permission

    public function AddRoleinPermission()
    {
        $roles = Role::all();
        $permission = Permission::all();
        $permission_group = User::getpermissionGroups();
        return view('backend.pages.rolesetup.add_roles_permission', compact('roles', 'permission', 'permission_group'));
    }
    public function RolesPermissionStore(Request $request)
    {
        $data = array();
        $permissions = $request->permission;
        foreach ($permissions as $key => $item) {
            $data['role_id'] = $request->role_id;
            $data['permission_id'] = $item;

            DB::table('role_has_permissions')->insert($data);
        }

        $notification = array(
            'message' => 'Permission Added To Roles',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles.permission')->with($notification);
    }

    public function AllRoleinPermission()
    {
        $roles = Role::all();
        return view('backend.pages.rolesetup.all_roles_permissions', compact('roles'));
    }

    public function AdminEditRoles($id)
    {
        $role = Role::findById($id);
        $permission = Permission::all();
        $permission_group = User::getpermissionGroups();
        return view('backend.pages.rolesetup.edit_roles_permission', compact('role', 'permission', 'permission_group'));
    }

    public function AdminUpdateRoles(Request $request, $id)
    {
        $role = Role::findById($id);
        $permissions = $request->permission;
        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        $notification = array(
            'message' => 'Permission updated To Roles',
            'alert-type' => 'success'
        );
        return redirect()->route('all.roles.permission')->with($notification);
    }

    public function AllRoleinPermissionDelete($id)
    {
        $role = Role::findById($id);

        if (!is_null($role)) {
            $role->delete();
        }
        $notification = array(
            'message' => 'Permission Deleted From Roles',
            'alert-type' => 'warning'
        );
        return redirect()->route('all.roles.permission')->with($notification);
    }

}
