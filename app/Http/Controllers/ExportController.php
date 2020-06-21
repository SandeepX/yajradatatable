<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ExportDataTable;


class ExportController extends Controller
{
    
	public function index(ExportDataTable $dataTables){
		return $dataTables->render('export');
	}

}
