function confirmDelete() {
    Swal.fire({
        title: "Confirm Deletion",
        text: "Deleting this will permanently remove all its records. Do you wish to proceed with deleting ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("deleteModal").submit();
        }
    });
}
