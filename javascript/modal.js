function openModal(id) {
    document.getElementById('confirmationModal').style.display = 'block';
    // Set the clinic ID in a hidden input field within the modal
    document.getElementById('clinicIdInput').value = id;
}

function closeModal() {
    document.getElementById('confirmationModal').style.display = 'none';
}

function confirmDelete() {
    // Get the clinic ID from the hidden input field
    var clinicId = document.getElementById('clinicIdInput').value;
    
    // Add logic to perform deletion using clinicId
    var deleteLink = document.getElementById('deleteLink');
    deleteLink.href = "/lifecare-site/process/delete_clinic.php?id=" + clinicId;
    deleteLink.click(); // Trigger the click on the hidden link
    closeModal(); // Close the modal after deletion
}