<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class JemaatWilayahChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $jemaat = Jemaat::get();
        $data = [
            $jemaat->where('id_wilayah','1')->count(),
            $jemaat->where('id_wilayah','2')->count(),
            $jemaat->where('id_wilayah','3')->count(),
            $jemaat->where('id_wilayah','4')->count(),
            $jemaat->where('id_wilayah','5')->count(),
        ];
        $label = [
            'Rayon A',
            'Rayon B',
            'Rayon C',
            'Rayon D',
            'Rayon E',
        ];
        return $this->chart->pieChart()
            ->setTitle('Persentase jemaat berdasarkan wilayah')
            ->setSubtitle('')
            ->addData($data)
            ->setLabels($label);
    }
}
