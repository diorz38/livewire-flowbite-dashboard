<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class MainChart extends Component
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
        $this->chartSeries = [
                [
                    'name' => 'Revenue',
                    'data' => [6356, 6218, 6156, 6526, 6356, 6256, 6056],
                    'color' => '#1A56DB'
                ],
                [
                    'name' => 'Revenue (previous period)',
                    'data' => [6556, 6725, 6424, 6356, 6586, 6756, 6616],
                    'color' => '#FDBA8C'
                ]
            ];

        $mainChartColors = [
            'labelColor' => '#6b7280',
            'borderColor' => '#e5e7eb',
            'opacityFrom' => 0.45,
            'opacityTo' => 0.1
        ];
        $this->chartOptions = [
            'chart' => [
                'height' => 420,
                'type' => 'area',
                'fontFamily' => 'Inter, sans-serif',
                'foreColor' => $mainChartColors['labelColor'],
                'toolbar' => [
                    'show' => false
                ]
            ],
            'fill' => [
                'type' => 'gradient',
                'gradient' => [
                    'enabled' => true,
                    'opacityFrom' => $mainChartColors['opacityFrom'],
                    'opacityTo' => $mainChartColors['opacityTo']
                ]
            ],
            'dataLabels' => [
                'enabled' => false
            ],
            'tooltip' => [
                'style' => [
                    'fontSize' => '14px',
                    'fontFamily' => 'Inter, sans-serif'
                ]
            ],
            'grid' => [
                'show' => true,
                'borderColor' => $mainChartColors['borderColor'],
                'strokeDashArray' => 1,
                'padding' => [
                    'left' => 35,
                    'bottom' => 15
                ]
            ],

            'markers' => [
                'size' => 5,
                'strokeColors' => '#ffffff',
                'hover' => [
                    'size' => null,
                    'sizeOffset' => 3
                ]
            ],
            'xaxis' => [
                'categories' => ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
                'labels' => [
                    'style' => [
                        'colors' => [$mainChartColors['labelColor']],
                        'fontSize' => '14px',
                        'fontWeight' => 500
                    ]
                ],
                'axisBorder' => [
                    'color' => $mainChartColors['borderColor']
                ],
                'axisTicks' => [
                    'color' => $mainChartColors['borderColor']
                ],
                'crosshairs' => [
                    'show' => true,
                    'position' => 'back',
                    'stroke' => [
                        'color' => $mainChartColors['borderColor'],
                        'width' => 1,
                        'dashArray' => 10
                    ]
                ]
            ],
            'yaxis' => [
                'labels' => [
                    'style' => [
                        'colors' => [$mainChartColors['labelColor']],
                        'fontSize' => '14px',
                        'fontWeight' => 500
                    ],
                    // 'formatter' => 'function(value) { return "$" + value; }'
                ]
            ],
            'legend' => [
                'fontSize' => '14px',
                'fontWeight' => 500,
                'fontFamily' => 'Inter, sans-serif',
                'labels' => [
                    'colors' => [$mainChartColors['labelColor']]
                ],
                'itemMargin' => [
                    'horizontal' => 10
                ]
            ],
            'responsive' => [
                [
                    'breakpoint' => 1024,
                    'options' => [
                        'xaxis' => [
                            'labels' => [
                                'show' => false
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.dashboard.main-chart', [
            'chartId' => $this->chartId,
            'chartConfig' => json_encode([
                'options' => $this->chartOptions,
                'series' => $this->chartSeries
            ])
        ]);
    }
}
