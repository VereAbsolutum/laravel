<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PermissionsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index(PermissionsDataTable $permissionsDataTable)
    {
        return $permissionsDataTable->render('admin.permissions.index');
    }
}
