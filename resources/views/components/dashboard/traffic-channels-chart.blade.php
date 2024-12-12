<div>
    <div class="w-full">
        <h3 class="mb-2 text-base font-normal text-gray-500 dark:text-gray-400">Audience by age
        </h3>
        <div class="flex items-center mb-2">
            <div class="w-16 text-sm font-medium dark:text-white">50+</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 18%"></div>
            </div>
        </div>
        <div class="flex items-center mb-2">
            <div class="w-16 text-sm font-medium dark:text-white">40+</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 15%"></div>
            </div>
        </div>
        <div class="flex items-center mb-2">
            <div class="w-16 text-sm font-medium dark:text-white">30+</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 60%"></div>
            </div>
        </div>
        <div class="flex items-center mb-2">
            <div class="w-16 text-sm font-medium dark:text-white">20+</div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-primary-600 h-2.5 rounded-full dark:bg-primary-500" style="width: 30%"></div>
            </div>
        </div>
    </div>
    <div id="traffic-channels-chart" class="w-full"></div>

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
        var chart3 = new ApexCharts(document.getElementById('traffic-by-device'),
            getTrafficChannelsChartOptions());
        chart3.render();

        // init again when toggling dark mode
        document.addEventListener('dark-mode', function() {
            chart3.updateOptions(getTrafficChannelsChartOptions());
        });
    });
</script>
