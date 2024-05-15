document.addEventListener("DOMContentLoaded", function() {
    // Expense Chart
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

    // Child Doughnut Chart
    const childDataElements = document.querySelectorAll('.childData');

    childDataElements.forEach(function(childDataElement) {
        const childLabels = JSON.parse(childDataElement.getAttribute('data-childLabels'));
        const childColors = JSON.parse(childDataElement.getAttribute('data-childColors'));
        const childAmounts = JSON.parse(childDataElement.getAttribute('data-childAmounts'));

        const ctx = childDataElement.previousElementSibling.getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: childLabels,
                datasets: [{
                    data: childAmounts,
                    backgroundColor: childColors, 
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

    // Child Bar Chart
    const childBarDataElements = document.querySelectorAll('.childBarData');

    childBarDataElements.forEach(function(childBarDataElement) {
        const childBarLabels = JSON.parse(childBarDataElement.getAttribute('data-childBarLabels'));
        const childBarColors = JSON.parse(childBarDataElement.getAttribute('data-childBarColors'));
        const childBarAmounts = JSON.parse(childBarDataElement.getAttribute('data-childBarAmounts'));

        const ctx = childBarDataElement.previousElementSibling.getContext('2d');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: childBarLabels,
                datasets: [{
                    data: childBarAmounts,
                    backgroundColor: childBarColors, 
                }]
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
                }
            },
        });
    });

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

    const ctxPeople = document.getElementById('peopleChart').getContext('2d');
    const peopleChart = new Chart(ctxPeople, {
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
