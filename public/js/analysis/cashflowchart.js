const ctxCashflow = document.getElementById('cashflowChart').getContext('2d');

const cashflowChart = new Chart(ctxCashflow, {
    type: "bar",
    data: {
        labels: ["4", "5", "6", "7", "8", "9", "10", "11", "12", "1", "2", "3"],
        datasets: [
            {
                type: "line",
                label: "Balance",
                data: [100, 200, 350, -100, 200, 400, 300, -200, 100, 200, -150, 200],
                borderColor: [
                    "rgba(255, 215, 10, 1)",
                ],
                backgroundColor: [
                    "rgba(255, 215, 10, 1)",
                ],
                pointRadius: 7,
                pointHoverRadius: 12
            },
            {
                label: "Income",
                data: [500, 500, 500, 500, 500, 600, 600, 600, 600, 600, 600, 600],
                backgroundColor: [
                    "rgba(34, 124, 157, 0.5)",
                ],
            },
            {
                label: "Expense",
                data: [-500, -500, -500, -500, -500, -600, -600, -600, -600, -600, -600, -600],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.5)",
                ],
            },
        ],
    },
    options: {
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'right',
            },
        }
    },
});