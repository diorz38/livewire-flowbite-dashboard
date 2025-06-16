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
