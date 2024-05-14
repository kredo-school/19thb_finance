const ctxExpense = document.getElementById('expenseChart').getContext('2d');
const expenseChart = new Chart(ctxExpense, {
    type: 'doughnut',
    data: {
        labels: ["House", "Meal", "Child", "XXX", "XXX", "XXX"],
        datasets: [{
            data: [480, 100, 280, 400, 320, 380],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false,
            },
        } 
    },
});

const ctxChild = document.getElementById('childChart').getContext('2d');
const childChart = new Chart(ctxChild, {
    type: 'doughnut',
    data: {
        labels: ["Money Juo", "Money Juuco"],
        datasets: [{
            data: [1500, 1000],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
        }]
    },
    options: {
        plugins: {
            legend: {
                display: false,
            },
        } 
    },
});

const ctxChildbar = document.getElementById('childbarChart').getContext('2d');
const childbarChart = new Chart(ctxChildbar, {
    type: "line",
    data: {
        labels: ["4", "5", "6", "7", "8", "9", "10", "11", "12", "1", "2", "3"],
        datasets: [
            {
                label: "Money Juo", 
                data: [500, 300, 500, 500, 400, 600, 300, 600, 500, 600, 800, 600],
                borderColor: [
                    "rgba(255, 99, 132, 1)",
                ],
                backgroundColor: [
                    "rgba(255, 99, 132, 1)",
                ],
                pointRadius: 5,
                pointHoverRadius: 10
            },
            {
                label: "Money Juo", 
                data: [200, 500, 600, 700, 400, 100, 0, 300, 100, 800, 500, 200],
                borderColor: [
                    "rgba(54, 162, 235, 1)",
                ],
                backgroundColor: [
                    "rgba(54, 162, 235, 1)",
                ],
                pointRadius: 5,
                pointHoverRadius: 10
            },
        ],
    },
    options: {
        scales: {
            x: {
                beginAtZero: true,
            },
            y: {
                scaleShowables: false,
            }
        },
        plugins: {
            legend: {
                display: false,
            },
        }
    },
});