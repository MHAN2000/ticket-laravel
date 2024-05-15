const createUser = async () => {
    event.preventDefault();
    const url = route('users.store');
    const form = document.getElementById('usersForm');
    const formData = new FormData(form);
    const init = setMethodHeaders('POST', formData);
    const req = await fetch(url, init);
    if (req.ok) {
        showToast('Exito', 'Se ha guardado exitosamente', 'success');
        usersTable.ajax.reload();
        usersModal.toggle();
        return;
    }
    showToast('Error', 'Ha ocurrido un error', 'error');
}