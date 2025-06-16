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
    <div id="{{ $chartId }}"></div>
</div>
@once
    <script>
        document.addEventListener('livewire:navigated', () => {
            // Fungsi untuk inisialisasi chart
            function initApexChart() {
                const chartElement = document.getElementById('{{ $chartId }}');
                
                if (!chartElement) {
                    console.error('Chart container not found');
                    return;
                }

                try {
                    const config = JSON.parse(@js($chartConfig));
                    console.log('Chart config:', config);
                    
                    const chart = new ApexCharts(chartElement, {
                        ...config.options,
                        series: config.series
                    });
                    
                    chart.render();
                    console.log('Chart successfully rendered');
                } catch (error) {
                    console.error('ApexCharts error:', error);
                }
            }

            // Inisialisasi setelah semua siap
            setTimeout(() => {
                initApexChart();
            }, 100);
        });
    </script>


@endonce
