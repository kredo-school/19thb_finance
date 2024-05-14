// Get the modal element
var modal = document.getElementById("successModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Show the modal
modal.style.display = "block";

// Close the modal when the user clicks on <span> (x)
span.onclick = function() {
  modal.style.display = "none";
}