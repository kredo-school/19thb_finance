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
                borderColor: '#F7F3EB',
                borderWidth: 0.5,
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

document.addEventListener("DOMContentLoaded", function() {
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

});

    
document.addEventListener("DOMContentLoaded", function() {

    const cashflowDataElement = document.getElementById('cashflowData');
    const cashflowLabels = JSON.parse(cashflowDataElement.getAttribute('data-cashflowLabels'));
    const cashflowIncome = JSON.parse(cashflowDataElement.getAttribute('data-cashflowIncome'));
    const cashflowExpense = JSON.parse(cashflowDataElement.getAttribute('data-cashflowExpense'));
    const cashflowBalance = JSON.parse(cashflowDataElement.getAttribute('data-cashflowBalance'));

    const ctxCashflow = document.getElementById('cashflowChart').getContext('2d');

    const cashflowChart = new Chart(ctxCashflow, {
        type: "bar",
        data: {
            labels: cashflowLabels,
            datasets: [
                {
                    type: "line",
                    label: "Balance",
                    data: cashflowBalance,
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
                    data: cashflowIncome,
                    backgroundColor: [
                        "rgba(34, 124, 157, 0.5)",
                    ],
                },
                {
                    label: "Expense",
                    data: cashflowExpense,
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
                    grid: {
                        display: false
                    },
                },
                y: {
                    stacked: true
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            let label = context.dataset.label || '';
    
                            if (label) {
                                label += ': ';
                            }
                            if (context.parsed.y !== null) {
                                label += context.parsed.y.toLocaleString();
                            }
                            
                            if (context.dataset.type === 'line') {
                                const income = context.chart.data.datasets[1].data[context.dataIndex];
                                const expense = -context.chart.data.datasets[2].data[context.dataIndex];
                                label += ' [ Income: ' + income.toLocaleString() + ' - Expense: ' + expense.toLocaleString() + ' ]';
                            }
    
                            return label;
                        }
                    }
                },
                legend: {
                    display: true,
                    position: 'right',
                },
            }
        },
    });

});


document.addEventListener("DOMContentLoaded", function() {
    // People Doughnut Chart
    const peopleDataElements = document.querySelectorAll('.peopleData');

    peopleDataElements.forEach(function(peopleDataElement) {
        const peopleLabels = JSON.parse(peopleDataElement.getAttribute('data-peopleLabels'));
        const peopleColors = JSON.parse(peopleDataElement.getAttribute('data-peopleColors'));
        const peopleAmounts = JSON.parse(peopleDataElement.getAttribute('data-peopleAmounts'));

        const ctx = peopleDataElement.previousElementSibling.getContext('2d');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: peopleLabels,
                datasets: [{
                    data: peopleAmounts,
                    backgroundColor: peopleColors, 
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


    const parentCategoryElements = document.querySelectorAll('.parentCategory');

    parentCategoryElements.forEach(function(parentCategoryElement) {
        const personDataElements = parentCategoryElement.querySelectorAll('.personData');
        const datasets = [];

        personDataElements.forEach(function(personDataElement) {
            const personName = JSON.parse(personDataElement.getAttribute('data-personName'));
            const personColors = JSON.parse(personDataElement.getAttribute('data-personColors'));
            const personAmounts = JSON.parse(personDataElement.getAttribute('data-personAmounts'));

            // データセットオブジェクトの作成
            const dataset = {
                label: personName,
                data: personAmounts,
                borderColor: personColors,
                backgroundColor: personColors,
                pointRadius: 5,
                pointHoverRadius: 10
            };

            datasets.push(dataset);
        });

        const personLabels = JSON.parse(personDataElements[0].getAttribute('data-personLabels'));
        const ctx = parentCategoryElement.querySelector('.personChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: personLabels,
                datasets: datasets
            },
            options: {
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: {
                            display: false
                        },
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
    });

});