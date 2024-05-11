document.getElementById("expense").addEventListener("click", function() {
    var expenseButton = document.getElementById("expense");
    var incomeButton = document.getElementById("income");
    var expenseCategories = document.getElementById("expense_categories");
    var incomeCategories = document.getElementById("income_categories");
    if (expenseCategories.style.display === "none") {
        expenseButton.classList.add('active');
        incomeButton.classList.remove('active');
        expenseCategories.style.display = "block";
        incomeCategories.style.display = "none";
    }
});

document.getElementById("income").addEventListener("click", function() {
    var expenseButton = document.getElementById("expense");
    var incomeButton = document.getElementById("income");
    var expenseCategories = document.getElementById("expense_categories");
    var incomeCategories = document.getElementById("income_categories");
    if (incomeCategories.style.display === "none") {
        expenseButton.classList.remove('active');
        incomeButton.classList.add('active');
        incomeCategories.style.display = "block";
        expenseCategories.style.display = "none";
    }
});


