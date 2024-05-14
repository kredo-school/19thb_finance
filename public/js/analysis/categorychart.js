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