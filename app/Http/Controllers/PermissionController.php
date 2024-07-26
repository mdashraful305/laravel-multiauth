<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
class PermissionController extends Controller
{

    public function index(): View
    {
        return view('permissions.index', [
            'permissions' => Permission::orderBy('id','DESC')->paginate(15)
        ]);
    }

    public function create(): View
    {
        return view('permissions.create', [
            'routes' => Route::getRoutes()->getRoutes(),
            'permissions' => Permission::orderBy('id','DESC')->pluck('name')->toArray()
        ]);
    }


    public function store(Request $request): RedirectResponse
    {
        $this->validate(request(), [
            'name' => 'required|unique:permissions'
        ]);
        $permissions = Permission::create(['name' => $request->name]);
        return redirect()->route('permissions.index')
                ->withSuccess('New role is added successfully.');
    }


    public function edit(string $id)
    {
        $permission = Permission::findById($id);
        return view('permissions.edit', compact('permission'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate(request(), [
            'name' => 'required|unique:permissions,name,'.$id
        ]);
        $permission = Permission::findById($id);
        $permission->name = $request->name;
        $permission->save();
        return redirect()->route('permissions.index')
                ->withSuccess('Permission is updated successfully.');
    }


    public function destroy(string $id)
    {
        $permission = Permission::findById($id);
        $permission->delete();
        return redirect()->route('permissions.index')
                ->withSuccess('Permission is deleted successfully.');

    }
}
