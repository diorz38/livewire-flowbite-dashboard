<div>
    <div wire:ignore id="{{ $chartId }}" style="width: 100%; height: 350px;"></div>

    @push('page-scripts')
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

    @endpush
</div>