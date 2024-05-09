const tabMenus = document.querySelectorAll('.tab__menu-item');

tabMenus.forEach((tabMenu) => {
  tabMenu.addEventListener('click', tabSwitch);
})

function tabSwitch(e) {

    const tabTargetData = e.currentTarget.dataset.tab;

    const tabList = e.currentTarget.closest('.tab__menu');
    const tabItems = tabList.querySelectorAll('.tab__menu-item');

    const tabPanelItems = tabList.
    nextElementSibling.querySelectorAll('.tab__panel-item');

    tabItems.forEach((tabItem) => {
        tabItem.classList.remove('active');
    })
    tabPanelItems.forEach((tabPanelItem) => {
        tabPanelItem.classList.add('d-none');
    })

    e.currentTarget.classList.add('active');

    tabPanelItems.forEach((tabPanelItem) => {
        if (tabPanelItem.dataset.panel ===  tabTargetData) {
            tabPanelItem.classList.remove('d-none');
        }
    })
}

const parentCategories = document.querySelectorAll('.parent_category');

parentCategories.forEach((parentCategory) => {
  parentCategory.addEventListener('click', childSwitch);
})

function childSwitch(e) {

    const tabTargetData = e.currentTarget.dataset.tab;

    const tabList = e.currentTarget.closest('.parent_categories');
    const tabItems = tabList.querySelectorAll('.parent_category');

    const tabPanelItems = tabList.
    nextElementSibling.querySelectorAll('.child_category');

    tabItems.forEach((tabItem) => {
        tabItem.classList.remove('active');
    })
    tabPanelItems.forEach((tabPanelItem) => {
        tabPanelItem.classList.add('d-none');
    })

    e.currentTarget.classList.add('active');

    tabPanelItems.forEach((tabPanelItem) => {
        if (tabPanelItem.dataset.panel ===  tabTargetData) {
            tabPanelItem.classList.remove('d-none');
        }
    })
}

document.getElementById("expense").addEventListener("click", function() {
    var expenseCategories = document.getElementById("expense_categories");
    var incomeCategories = document.getElementById("income_categories");
    var editIncomeCategory = document.getElementById("editIncomeCategory");
    if (expenseCategories.style.display === "none") {
        expenseCategories.style.display = "block";
        incomeCategories.style.display = "none";
        editIncomeCategory.style.display = "none";
        editIncomeButton.classList.remove('active');
    }
});

document.getElementById("income").addEventListener("click", function() {
    var expenseCategories = document.getElementById("expense_categories");
    var incomeCategories = document.getElementById("income_categories");
    var expenseItems = document.querySelectorAll(".expense-items");
    if (incomeCategories.style.display === "none") {
        incomeCategories.style.display = "block";
        expenseCategories.style.display = "none";
        expenseItems.forEach(function(expenseItem) {
            expenseItem.style.display = "none";
        });
        editParentButton.classList.remove("active");
    }
});

document.getElementById("addButton").addEventListener("click", function() {
    var addCategory = document.getElementById("addCategory");
    var addChildCategory = document.querySelector("#addChildCategory")
    var editItems = document.querySelectorAll(".edit-items");
    if (addCategory.style.display === "none") {
        addCategory.style.display = "block";
        addChildCategory.style.display = "none";
        editItems.forEach(function(editItem) {
            editItem.style.display = "none";
        });
    } else {
        addCategory.style.display = "none";
    }
});

document.querySelector("#editParentButton").addEventListener("click", function() {
    var editParentCategory = document.querySelector("#editParentCategory");
    var editChildCategory = document.querySelector("#editChildCategory");
    var editIncomeCategory = document.querySelector("#editIncomeCategory");
    var addItems = document.querySelectorAll(".add-items");
    if (editParentCategory.style.display === "none") {
        editParentCategory.style.display = "block";
        editChildCategory.style.display = "none";
        editIncomeCategory.style.display = "none";
        addItems.forEach(function(addItem) {
            addItem.style.display = "none";
        });
    } else {
        editParentCategory.style.display = "none";
    }
});

document.querySelector("#editIncomeButton").addEventListener("click", function() {
    var editIncomeCategory = document.querySelector("#editIncomeCategory");
    var expenseItems = document.querySelectorAll(".expense-items");
    var editChildCategory = document.querySelector("#editChildCategory");
    var addItems = document.querySelectorAll(".add-items");
    if (editIncomeCategory.style.display === "none") {
        editIncomeCategory.style.display = "block";
        editParentCategory.style.display = "none";
        editChildCategory.style.display = "none";
        expenseItems.forEach(function(expenseItem) {
            expenseItem.style.display = "none";
        });
        addItems.forEach(function(addItem) {
            addItem.style.display = "none";
        });
        editIncomeButton.classList.add('active');
    } else {
        editIncomeCategory.style.display = "none";
        editIncomeButton.classList.remove('active');
    }
});

document.querySelector("#addChildButton").addEventListener("click", function() {
    var addChildCategory = document.querySelector("#addChildCategory");
    var addCategory = document.querySelector("#addCategory");
    var editItems = document.querySelectorAll(".edit-items");
    if (addChildCategory.style.display === "none") {
        addChildCategory.style.display = "block";
        addCategory.style.display = "none";
        editItems.forEach(function(editItem) {
            editItem.style.display = "none";
        });
    } else {
        addChildCategory.style.display = "none";
    }
});

document.querySelector("#editChildButton").addEventListener("click", function() {
    var editChildCategory = document.querySelector("#editChildCategory");
    var editParentCategory = document.querySelector("#editParentCategory");
    var addItems = document.querySelectorAll(".add-items");
    if (editChildCategory.style.display === "none") {
        editChildCategory.style.display = "block";
        editParentCategory.style.display = "none";
        addItems.forEach(function(addItem) {
            addItem.style.display = "none";
        });
    } else {
        editChildCategory.style.display = "none";
    }
});


