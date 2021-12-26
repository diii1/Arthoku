<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        const labelsX = [
            'Expense',
            'Income',
        ];

        const data = {
            labels: labelsX,
            datasets: [{
                label: 'Rp',
                backgroundColor: ['#fec5bb', '#8ecae6'],
                borderColor: ['#ff4d6d', '#023e8a'],
                borderWidth: 3,
                data: [ {{ $dataExpense }}, {{ $dataIncome }} ],
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                plugins:{
                    legend: {
                        display: false
                    }
                }
            }
        };
    </script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
</script>