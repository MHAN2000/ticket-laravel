let citiesTable, cityModal;
document.addEventListener('DOMContentLoaded', () => {
    initCitiesTable();
});

const initCitiesTable = () => {
    citiesTable = $('#citiesTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('cities.index'),
        columns: [
            {
                data: 'city'
            },
            {
                data: 'id',
                render: id =>
                (
                    `<button onclick="deleteCity(${id})" class="btn btn-danger">Borrar</button>
                    <button onclick="editCityModal(${id})" class="btn btn-primary">Editar</button>`
                )
            }
        ]
    });
}

const deleteCity = async id => {
    console.log(id);
    const result = await validateDelete();
    if (result.isDenied) return;

    const url = route('cities.destroy', id);
    const init = setMethodHeaders('DELETE');
    const req = await fetch(url, init)
    if (req.ok) {
        showToast('Exito', 'Se ha eliminado', 'success');
        citiesTable.ajax.reload();
        return;
    }
    showToast('Error', 'Ha ocurrido un error', 'error');
}

const editCityModal = async id => {
    const url = route('cities.edit', id);
    const req = await fetch(url);
    if (req.ok) {
        const view = await req.text();
        cityModal = new bootstrap.Modal(document.getElementById('modal'));
        document.getElementById('modalTitle').innerHTML = 'Editar municipio';
        document.getElementById('modalBody').innerHTML = view;
        cityModal.toggle();
        return;
    }

    showToast('Error', 'Ha ocurrido un error', 'error');
}

const createCityModal = async () => {
    const url = route('cities.create');
    const req = await fetch(url);
    if (req.ok) {
        const view = await req.text();
        cityModal = new bootstrap.Modal(document.getElementById('modal'));
        document.getElementById('modalTitle').innerHTML = 'Registrar municipio';
        document.getElementById('modalBody').innerHTML = view;
        cityModal.toggle();
        return;
    }

    showToast('Error', 'Ha ocurrido un error', 'error');
}