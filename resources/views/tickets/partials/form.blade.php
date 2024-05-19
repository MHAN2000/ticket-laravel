<div class="col-4">
    <input name="curp" placeholder="CURP" />
</div>
<div class="col-2">
    <input name="phone_1" type="number" />
</div>
<div class="col-2">
    <input name="phone_2" type="number" />
</div>
<div class="col-4">
    <input name="name" placeholder="Nombre" />
</div>
<div class="col-4">
    <input name="last_name" placeholder="Apellido paterno" />
</div>
<div class="col-4">
    <input name="second_last_name" placeholder="Apellido materno" />
</div>
<div class="col-12">
    <input name="email" placeholder="Email" /> 
</div>
<div class="col-12">
    <input type="date" name="date" onchange="getAvailableTimes(event)"/>
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