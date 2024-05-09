document.getElementById("toggleButton").addEventListener("click", function() {
    var content = document.getElementById("content");
    if (content.style.display === "none") {
        content.style.display = "block";
    } else {
        content.style.display = "none";
    }
});

function changeColor(selectElement){
    var selectedColor = selectElement.value;
    var iconElement = document.querySelector('.fa-circle-user');
    iconElement.style.color = selectedColor;
}