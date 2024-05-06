<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Esto imprime los datos</p>
    <p>CURP: {{ $ticket->curp }}</p>
    <p>Nombre: {{ $ticket->name }}</p>
    <p>Apellido paterno: {{ $ticket->last_name }}</p>
    <p>Apellido materno: {{ $ticket->second_last_name }}</p>
    <p>Telefono 1: {{ $ticket->phone_1 }}</p>
    <p>Telefono 2: {{ $ticket->phone_2 }}</p>
    <p>Email: {{ $ticket->email }}</p>
    <p>Folio: {{ $ticket->folio }}</p>
    <p>Ciudad: {{ $ticket->city->city }}
    <p>Nivel educativo: {{ $ticket->educationLevel->level }}
    <p>Estatus: {{ $ticket->status->status }}</p>
    <p>Responsable: {{ $ticket->responsable->name }}</p>
    <p>Fecha creacion: {{ $ticket->created_at }} </p>
</body>
</html>