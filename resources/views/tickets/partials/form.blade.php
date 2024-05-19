<div class="col-4">
    <input name="curp" placeholder="CURP" value="{{ optional($ticket ?? null)->curp }}" />
</div>
<div class="col-2">
    <input name="phone_1" type="number" value="{{ optional($ticket ?? null)->phone_1 }}" />
</div>
<div class="col-2">
    <input name="phone_2" type="number" value="{{ optional($ticket ?? null)->phone_2 }}" />
</div>
<div class="col-4">
    <input name="name" placeholder="Nombre" value="{{ optional($ticket ?? null)->name }}" />
</div>
<div class="col-4">
    <input name="last_name" placeholder="Apellido paterno" value="{{ optional($ticket ?? null)->last_name }}" />
</div>
<div class="col-4">
    <input name="second_last_name" placeholder="Apellido materno" value="{{ optional($ticket ?? null)->second_last_name }}" />
</div>
<div class="col-12">
    <input name="email" placeholder="Email" value="{{ optional($ticket ?? null)->curp }}" /> 
</div>
<div class="col-12">
    <input type="date" name="date" onchange="getAvailableTimes(event)" value="{{ optional($ticket ?? null)->date }}"/>
</div>
<div class="col-12">
    <select name="time" id="availableHours">
        <option>Elige un horario</option>
    </select>
</div>
<div class="col-6">
    <select name="city_id" id="citiesSelect">
        <option selected disabled>Elige una ciudad</option>
    </select>
</div>
<div class="col-6">
    <select name="subject_id" id="subjectsSelect">
        <option selected disabled>Elige un motivo</option>
    </select>
</div>
<div class="col-6">
    <select name="responsable_id" id="responsablesSelect">
        <option name="responsable_id" selected disabled>Elige un responsable</option>
    </select>
</div>
<div class="col-6">
    <select name="education_level_id" id="educationLevelsSelect">
        <option selected disabled>Nivel que cursa</option>
    </select>
</div>