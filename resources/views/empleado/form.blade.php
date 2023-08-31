<label for="Nombres">Nombres</label>
<input type="text" value="{{$empleado->Nombres}}" name="Nombres" id="Nombres">
<br>
<label for="Apellidos">Apellidos</label>
<input type="text" value="{{$empleado->Apellidos}}" name="Apellidos" id="Apellidos">
<br>
<label for="Correo">Correo</label>
<input type="text" value="{{$empleado->Correo}}" name="Correo" id="Correo">
<br>
<label for="Telefono">Telefono</label>
<input type="text" value="{{$empleado->Telefono}}" name="Telefono" id="Telefono">
<br>
<label for="Foto">Foto</label>
<br>
{{$empleado->Foto}}
<br>
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="Guardar Datos">