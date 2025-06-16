<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class TrafficDeviceChart extends Component
{
    public $chartId;
    public $chartOptions;
    public $chartSeries;

    public function mount()
    {
        $this->chartId = 'chart-'.uniqid();
        $this->prepareChartData();
    }

    protected function prepareChartData()
    {
        $this->chartSeries = [70, 5, 25];
        $trafficChannelsChartColors = [
            'strokeColor' => '#ffffff' // or whatever color you're using
        ];

        $this->chartOptions = [
            'labels' => ['Desktop', 'Tablet', 'Phone'],
            'colors' => ['#16BDCA', '#FDBA8C', '#1A56DB'],
            'chart' => [
                'type' => 'donut',
                'height' => 400,
                'fontFamily' => 'Inter, sans-serif',
                'toolbar' => ['show' => false]
            ],
            'responsive' => [
                [
                    'breakpoint' => 430,
                    'options' => [
                        'chart' => ['height' => 300]
                    ]
                ]
            ],
            'stroke' => [
                'colors' => [$trafficChannelsChartColors['strokeColor']]
            ],
            'states' => [
                'hover' => [
                    'filter' => [
                        'type' => 'darken',
                        'value' => 0.9
                    ]
                ]
            ],
            'tooltip' => [
                'shared' => true,
                'followCursor' => false,
                'fillSeriesColor' => false,
                'inverseOrder' => true,
                'style' => [
                    'fontSize' => '14px',
                    'fontFamily' => 'Inter, sans-serif'
                ],
                'x' => [
                    'show' => true,
                    'formatter' => 'function(_, opts) { return opts.w.config.labels[opts.seriesIndex]; }'
                ],
                'y' => [
                    'formatter' => 'function(value) { return value + "%"; }'
                ]
            ],
            'grid' => ['show' => false],
            'dataLabels' => ['enabled' => false],
            'legend' => ['show' => false]
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.traffic-device-chart', [
            'chartId' => $this->chartId,
            'chartConfig' => json_encode([
                'options' => $this->chartOptions,
                'series' => $this->chartSeries
            ])
        ]);
    }
}
