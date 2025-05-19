<div id="editModalContainer" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
    <!-- The content will be loaded dynamically via AJAX -->
</div>

<script>
    // This script is to handle closing the modal when clicking outside the modal content
    document.addEventListener('click', function(event) {
        const modal = document.getElementById('editModalContainer');
        if (!modal.classList.contains('hidden') && event.target === modal) {
            modal.classList.add('hidden');
            modal.innerHTML = '';
        }
    });
</script>
