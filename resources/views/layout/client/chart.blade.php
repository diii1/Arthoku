<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        const labels = [
            'Income',
            'Expense',
        ];

        const data = {
            labels: labels,
            datasets: [{
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [ {{ $countIncome }},{{ $countExpense }},],
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {}
        };
    </script>
    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
</script>