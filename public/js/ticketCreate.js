document.addEventListener('DOMContentLoaded', () => {
    fillCitiesSelect();
    fillSubjectsSelect();
    fillResponsablesSelect();
    fillEducationLevelsSelect();
});

const fillCitiesSelect = async () => {
    const url = route('cities.getCities');
    const req = await fetch(url);
    if (req.ok) {
        const res = await req.json();
        let citiesSelect = document.getElementById('citiesSelect');
        res.forEach(city => {
            citiesSelect.innerHTML += `<option value="${city.id}">${city.city}</option>`;
        });
    }
}

const getAvailableTimes = async (e) => {
    console.log(e.target.value);
    const url = route('tickets.available_times', e.target.value)
    const req = await fetch(url);
    if (req.ok) {
        const res = await req.json();
        document.getElementById('availableHours').innerHTML = '<option>Elige un horario</option>';
        res.forEach(x => {
            document.getElementById('availableHours').innerHTML += `<option value="${x}">${x}</option>`
        });
    }
}

const fillSubjectsSelect = async () => {
    const url = route('subjects.getSubjects');
    const req = await fetch(url);
    if (req.ok) {
        const res = await req.json();
        let subjectsSelect = document.getElementById('subjectsSelect');
        res.forEach(subject => {
            subjectsSelect.innerHTML += `<option value="${subject.id}">${subject.subject}</option>`;
        });
    }
}

const fillResponsablesSelect = async () => {
    const url = route('responsables.getResponsables');
    const req = await fetch(url);
    if (req.ok) {
        const res = await req.json();
        let responsablesSelect = document.getElementById('responsablesSelect');
        res.forEach(responsable => {
            responsablesSelect.innerHTML += `<option value="${responsable.id}">${responsable.name}</option>`;
        });
    }
}

const fillEducationLevelsSelect = async () => {
    const url = route('educationLevels.getEducationLevels');
    const req = await fetch(url);
    if (req.ok) {
        const res = await req.json();
        let educationLevelsSelect = document.getElementById('educationLevelsSelect');
        res.forEach(level => {
            educationLevelsSelect.innerHTML += `<option value="${level.id}">${level.level}</option>`;
        });
    }
}

const createTicket = async () => {
    event.preventDefault();
    const url = route('tickets.store');
    const form = document.getElementById('ticketForm');
    const formData = new FormData(form);
    formData.append('status_id', 1);
    const init = setMethodHeaders('POST', formData);
    const req = await fetch(url, init);
    if (req.ok) {
        const res = await req.json();
        showToast('Exito', 'Se ha registrado con exito', 'success');
        window.open(route('tickets.getPDF', res.id), '_blank').focus();
        return;
    }
    showToast('Error', 'Ha ocurrido un error', 'error');
}

const searchTicket = async () => {
    event.preventDefault();
    const curp = document.getElementById('curp').value;
    const folio = document.getElementById('folio').value;
    const url = route('tickets.search', [curp, folio])
    const req = await fetch(url);
    if (req.ok) {
        const res = await req.json();
        if (!!res) {
            window.open(route('tickets.edit', res.id));
        }

        showToast('Error', 'No se ha encontrado un ticket', 'error');
    }
}