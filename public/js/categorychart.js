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
        labels: ["Meal", "House", "Child", "XXX", "XXX", "XXX"],
        datasets: [{
            data: [480, 100, 280, 400, 320, 380],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 99, 132, 0.5)',
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
    type: "bar",
    data: {
        labels: ["4", "5", "6", "7", "8", "9", "10", "11", "12", "1", "2", "3"],
        datasets: [
            {
                data: [500, 500, 500, 500, 500, 600, 600, 600, 600, 600, 600, 600],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
                    "rgba(255, 99, 132, 0.5)",
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