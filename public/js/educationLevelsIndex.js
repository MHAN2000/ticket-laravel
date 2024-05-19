let educationLevelsTable, educationLevelModal;

document.addEventListener('DOMContentLoaded', () => {
    initEducationLevelsTable();
});

const initEducationLevelsTable = async () => {
    educationLevelsTable = $('#educationLevelsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('education-levels.index'),
        columns: [
            {
                data: 'level'
            }, 
            {
                data: 'id',
                render: d => `<button class="btn btn-danger">Borrar</button>`
            }
        ]
    })
}

const createEducationLevelModal = async () => {
    const url = route('education-levels.create');
    const req = await fetch(url);
    if (req.ok) {
        const view = await req.text();
        educationLevelModal = new bootstrap.Modal(document.getElementById('modal'));
        document.getElementById('modalTitle').innerHTML = 'Registrar nivel educativo';
        document.getElementById('modalBody').innerHTML = view;
        educationLevelModal.toggle();
        return;
    }
}