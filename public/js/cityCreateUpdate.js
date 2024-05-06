const createCity = async () => {
    event.preventDefault();
    const url = route('cities.store');
    const form = document.getElementById('cityForm');
    const formData = new FormData(form);
    const init = setMethodHeaders('POST', formData);
    const req = await fetch(url, init);
    if (req.ok) {
        showToast('Exito', 'Se ha guardado exitosamente', 'success');
        $('.modal').modal('hide');
        citiesTable.ajax.reload();
        return;
    }
    showToast('Error', 'Ha ocurrido un error', 'error');
}

const editCity = async id => {
    event.preventDefault();
    const url = route('cities.update', id);
    const form = document.getElementById('cityForm');
    const formData = new FormData(form);
    const init = setMethodHeaders('PUT', formData)
    console.log(Object.fromEntries(formData));
    const req = await fetch(url, init);
    if (req.ok) {
        $('.modal').modal('hide');
        showToast('Exito', 'Se han guardado los cambios', 'success');
        citiesTable.ajax.reload();
        return;
    }
    showToast('Error', 'Ha ocurrido un error', 'error');
}