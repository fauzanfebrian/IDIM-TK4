<?php

namespace App\Http\Controllers;


use App\DataTables\DashboardDataTable;


class DashboardController extends Controller
{
    public function index(DashboardDataTable $dashboardDataTable)
    {
        return $dashboardDataTable->render('welcome');
    }
}
