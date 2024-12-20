<div wire:ignore>
    <div class="flex items-center justify-between mb-4">
        <div class="flex-shrink-0">
            <span class="text-xl font-bold leading-none text-gray-900 sm:text-2xl dark:text-white">$45,385</span>
            <h3 class="text-base font-light text-gray-500 dark:text-gray-400">Sales this week
            </h3>
        </div>
        <div class="flex items-center justify-end flex-1 text-base font-medium text-green-500 dark:text-green-400">
            12.5%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>
    <div id="main-chart"></div>
</div>
@once
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', () => {
            getMainChartOptions = () => {
                let mainChartColors = {}

                if (document.documentElement.classList.contains('dark')) {
                    mainChartColors = {
                        borderColor: '#374151',
                        labelColor: '#9CA3AF',
                        opacityFrom: 0,
                        opacityTo: 0.15,
                    };
                } else {
                    mainChartColors = {
                        borderColor: '#F3F4F6',
                        labelColor: '#6B7280',
                        opacityFrom: 0.45,
                        opacityTo: 0,
                    }
                }

                return {
                    chart: {
                        height: 420,
                        type: 'area',
                        fontFamily: 'Inter, sans-serif',
                        foreColor: mainChartColors.labelColor,
                        toolbar: {
                            show: false
                        }
                    },
                    fill: {
                        type: 'gradient',
                        gradient: {
                            enabled: true,
                            opacityFrom: mainChartColors.opacityFrom,
                            opacityTo: mainChartColors.opacityTo
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    tooltip: {
                        style: {
                            fontSize: '14px',
                            fontFamily: 'Inter, sans-serif',
                        },
                    },
                    grid: {
                        show: true,
                        borderColor: mainChartColors.borderColor,
                        strokeDashArray: 1,
                        padding: {
                            left: 35,
                            bottom: 15
                        }
                    },
                    series: [{
                            name: 'Revenue',
                            data: [6356, 6218, 6156, 6526, 6356, 6256, 6056],
                            color: '#1A56DB'
                        },
                        {
                            name: 'Revenue (previous period)',
                            data: [6556, 6725, 6424, 6356, 6586, 6756, 6616],
                            color: '#FDBA8C'
                        }
                    ],
                    markers: {
                        size: 5,
                        strokeColors: '#ffffff',
                        hover: {
                            size: undefined,
                            sizeOffset: 3
                        }
                    },
                    xaxis: {
                        categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
                        labels: {
                            style: {
                                colors: [mainChartColors.labelColor],
                                fontSize: '14px',
                                fontWeight: 500,
                            },
                        },
                        axisBorder: {
                            color: mainChartColors.borderColor,
                        },
                        axisTicks: {
                            color: mainChartColors.borderColor,
                        },
                        crosshairs: {
                            show: true,
                            position: 'back',
                            stroke: {
                                color: mainChartColors.borderColor,
                                width: 1,
                                dashArray: 10,
                            },
                        },
                    },
                    yaxis: {
                        labels: {
                            style: {
                                colors: [mainChartColors.labelColor],
                                fontSize: '14px',
                                fontWeight: 500,
                            },
                            formatter: function(value) {
                                return '$' + value;
                            }
                        },
                    },
                    legend: {
                        fontSize: '14px',
                        fontWeight: 500,
                        fontFamily: 'Inter, sans-serif',
                        labels: {
                            colors: [mainChartColors.labelColor]
                        },
                        itemMargin: {
                            horizontal: 10
                        }
                    },
                    responsive: [{
                        breakpoint: 1024,
                        options: {
                            xaxis: {
                                labels: {
                                    show: false
                                }
                            }
                        }
                    }]
                };
            }

            var chart0 = new ApexCharts(document.getElementById('main-chart'), getMainChartOptions());
            chart0.render();

        });

        // init again when toggling dark mode
        document.addEventListener('dark-mode', function() {
            chart0.updateOptions(getMainChartOptions());
        });
    </script>
@endonce
