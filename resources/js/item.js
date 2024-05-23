document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.form-check-input').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const itemId = this.getAttribute('data-item-id');
            const isChecked = this.checked ? 1 : 0;

            fetch(`/item/${itemId}/check`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ is_checked: isChecked })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                    console.log('Item updated successfully');
                } else {
                    console.error('Failed to update item');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
});

