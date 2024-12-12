<div>
    <div class="flex items-center justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
        <div>
            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Traffic by
                device</h3>
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">Desktop</span>
        </div>
        <a wire:navigate href="#"
            class="inline-flex items-center p-2 text-xs font-medium uppercase rounded-lg text-primary-700 sm:text-sm hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
            Full report
            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
    <div id="traffic-by-device"></div>
</div>
<script data-navigate-once>
    document.addEventListener('livewire:navigated', () => {
        getTrafficChannelsChartOptions = () => {

            let trafficChannelsChartColors = {}

            if (document.documentElement.classList.contains('dark')) {
                trafficChannelsChartColors = {
                    strokeColor: '#1f2937'
                };
            } else {
                trafficChannelsChartColors = {
                    strokeColor: '#ffffff'
                }
            }

            return {
                series: [70, 5, 25],
                labels: ['Desktop', 'Tablet', 'Phone'],
                colors: ['#16BDCA', '#FDBA8C', '#1A56DB'],
                chart: {
                    type: 'donut',
                    height: 400,
                    fontFamily: 'Inter, sans-serif',
                    toolbar: {
                        show: false
                    },
                },
                responsive: [{
                    breakpoint: 430,
                    options: {
                        chart: {
                            height: 300
                        }
                    }
                }],
                stroke: {
                    colors: [trafficChannelsChartColors.strokeColor]
                },
                states: {
                    hover: {
                        filter: {
                            type: 'darken',
                            value: 0.9
                        }
                    }
                },
                tooltip: {
                    shared: true,
                    followCursor: false,
                    fillSeriesColor: false,
                    inverseOrder: true,
                    style: {
                        fontSize: '14px',
                        fontFamily: 'Inter, sans-serif'
                    },
                    x: {
                        show: true,
                        formatter: function(_, {
                            seriesIndex,
                            w
                        }) {
                            const label = w.config.labels[seriesIndex];
                            return label
                        }
                    },
                    y: {
                        formatter: function(value) {
                            return value + '%';
                        }
                    }
                },
                grid: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                },
                legend: {
                    show: false
                },
            };
        }

        var chart5 = new ApexCharts(document.getElementById('traffic-by-device'),getTrafficChannelsChartOptions());
        chart5.render();
    });
    // init again when toggling dark mode
    document.addEventListener('dark-mode', function() {
        chart5.updateOptions(getTrafficChannelsChartOptions());
    });
</script>
