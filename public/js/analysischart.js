const ctxExpense = document.getElementById('expenseChart').getContext('2d');
const expenseChart = new Chart(ctxExpense, {
    type: 'doughnut',
    data: {
        labels: ["Meal", "House", "Child", "XXX", "XXX", "XXX"],
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

const ctxWeek = document.getElementById('weekChart').getContext('2d');
const weekChart = new Chart(ctxWeek, {
    type: "bar",
    data: {
        labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        datasets: [
            {
                data: [500, 1500, 1000, 200, 0, 800, 500],
                backgroundColor: [
                    "rgba(255, 99, 132, 1)",
                ],
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