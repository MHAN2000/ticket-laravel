let usersTable, usersModal;
document.addEventListener('DOMContentLoaded', () => {
    initUsersTable();
    console.log('ok');
});

const login = async () => {
    event.preventDefault();
    const url = route('login_user');
    const form = document.getElementById('userForm');
    const formData = new FormData(form);
    const init = setMethodHeaders('POST', formData);
    const req = await fetch(url, init);
    if (req.ok) {
        window.location.href = route('home');
        return;
    }

    showToast('Error', JSON.stringify(req), 'error');
}

const initUsersTable = async () => {
    usersTable = $('#usersTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('users.index'),
        columns: [
            {
                data: 'name'
            },
            {
                data: 'email'
            },
            {
                data: 'created_at'
            },
            {
                data: 'id',
                render: d => `<button class="btn btn-danger" onclick="deleteUser(${d})">Borrar</button>`
            }
        ]
    });
}

const createUserModal = async () => {
    const url = route('users.create');
    const req = await fetch(url);
    if (req.ok) {
        const view = await req.text();
        usersModal = new bootstrap.Modal(document.getElementById('modal'));
        document.getElementById('modalTitle').innerHTML = 'Registrar usuario';
        document.getElementById('modalBody').innerHTML = view;
        usersModal.toggle();
        return;
    }

}

const deleteUser = async id => {
    const url = route('users.destroy', id);
    const init = setMethodHeaders('DELETE');
    const req = await fetch(url, init);
    if (req.ok) {
        showToast('Exito', 'Se ha eliminado con exito', 'success');
        usersTable.ajax.reload();
        return;
    }

    showToast('Error', 'Ha ocurrido un error', 'error');
}