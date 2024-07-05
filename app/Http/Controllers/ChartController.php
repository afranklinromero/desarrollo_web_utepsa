<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\User;

class ChartController extends Controller
{
    public function index()
    {
        $chart = Charts::create('line', 'highcharts')
            ->title('Usuarios Registrados Por Mes')
            ->elementLabel('Total Usuarios')
            ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'])
            ->values([5, 10, 20, 30, 40, 50])
            ->responsive(false);

        return view('chart', compact('chart'));
    }
}