<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LaporanController extends BaseController
{
    public function laporan()
    {
        return view('Laporan/laporan');
    }
}
