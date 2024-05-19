let ticketsTable;

document.addEventListener('DOMContentLoaded', () => {
    initTicketsTable();
});


const initTicketsTable = async () => {
    ticketsTable = $('#ticketsTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: route('tickets.index'),
        columns: [
            {
                data: 'folio'
            },
            {
                data: 'curp'
            },
            {
                data: 'name'
            },
            {
                data: 'last_name'
            },
            {
                data: 'second_last_name'
            },
            {
                data: 'city.city'
            },
            {
                data: 'education_level.level'
            },
            {
                data: 'email'
            },
            {
                data: 'phone_1'
            },
            {
                data: 'phone_2'
            },
            {
                data: 'status.status'
            },
            {
                data: 'responsable.name'
            },
            {
                data: 'subject.subject'
            },
            {
                data: 'created_at'
            }
        ]
    });
}