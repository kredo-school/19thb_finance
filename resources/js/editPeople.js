document.addEventListener('DOMContentLoaded', function () {

    var addButton = document.getElementById("addButton");

    addButton.addEventListener("click", function() {
        var content = document.querySelector(".addPeople");
        var editPeople = document.querySelector(".editPeople");

        document.querySelectorAll('.edit-button').forEach(btn => {
            btn.classList.remove('btn-main-reverse');
            btn.classList.add('text-secondary');
        });

        if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
            editPeople.style.display = "none";
            addButton.classList.remove('btn-main');
            addButton.classList.add('btn-main-reverse');
        } else {
            content.style.display = "none";
            addButton.classList.add('btn-main');
            addButton.classList.remove('btn-main-reverse');
        }
    });

});

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.edit-button').forEach(button => {
        button.addEventListener('click', function () {

            document.querySelectorAll('.edit-button').forEach(btn => {
                btn.classList.remove('btn-main-reverse');
                btn.classList.add('text-secondary');
            });

            this.classList.add('btn-main-reverse');
            this.classList.remove('text-secondary');

            const peopleId = this.getAttribute('data-people-id');
            const addPeople = document.querySelector(".addPeople");
            addPeople.style.display = "none";
            const addButton = document.getElementById("addButton");
            addButton.classList.add('btn-main');
            addButton.classList.remove('btn-main-reverse');
            editPeople(peopleId);
        });
    });
});

function editPeople(peopleId) {
    fetch(`/people/edit/${peopleId}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById('name_edit').value = data.name;
            document.getElementById('color_hex_edit').value = data.color_hex;
            document.querySelector('.icon-color-edit').style.color = '#' + data.color_hex;
            document.querySelector('.editPeople').style.display = 'block';
        })
        .catch(error => console.error('Error:', error));
}

    
