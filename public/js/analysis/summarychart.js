document.addEventListener("DOMContentLoaded", function() {
    const expenseDataElement = document.getElementById('expenseData');
    const expenseLabels = JSON.parse(expenseDataElement.getAttribute('data-expenseLabels'));
    const expenseColors = JSON.parse(expenseDataElement.getAttribute('data-expenseColors'));
    const expenseAmounts = JSON.parse(expenseDataElement.getAttribute('data-expenseAmounts'));

    const ctxExpense = document.getElementById('expenseChart').getContext('2d');

    const expenseChart = new Chart(ctxExpense, {
        type: 'doughnut',
        data: {
            labels: expenseLabels,
            datasets: [{
                data: expenseAmounts,
                backgroundColor: expenseColors,
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false,
                },
            },
        },
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const weeklyDataElement = document.getElementById('weeklyData');
    const weeklyLabels = JSON.parse(weeklyDataElement.getAttribute('data-weeklyLabels'));
    const weeklyAmounts = JSON.parse(weeklyDataElement.getAttribute('data-weeklyAmounts'));

    const ctxWeekly = document.getElementById('weeklyChart').getContext('2d');

    const weeklyChart = new Chart(ctxWeekly, {
        type: "bar",
        data: {
            labels: weeklyLabels,
            datasets: [
                {
                    data: weeklyAmounts,
                    backgroundColor: [
                        "rgba(255, 99, 132, 1)",
                    ],
                },
            ],
        },
        options: {
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                },
            },
            plugins: {
                legend: {
                    display: false,
                },
            },
            
        },
    });
});