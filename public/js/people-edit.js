document.getElementById("addButton").addEventListener("click", function() {
    var content = document.getElementById("addPeople");
    if (content.style.display === "none") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
});

document.getElementById("editButton").addEventListener("click", function() {
    var content = document.getElementById("editPeople");
    if (content.style.display === "none") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
});

function changeColor(selectElement){
    var selectedColor = selectElement.value;
    var iconElement = document.querySelector('.icon-color');
    iconElement.style.color = selectedColor;
}

function updateColor(selectElement){
    var selectedColor = selectElement.value;
    var iconElement = document.querySelector('.icon-color-edit');
    iconElement.style.color = selectedColor;
}
