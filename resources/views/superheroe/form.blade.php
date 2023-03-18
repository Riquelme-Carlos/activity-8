<label for="NombreReal">Nombre Real</label>
<input id="NombreReal" type="text" name="NombreReal" value="{{  isset($superheroe->NombreReal)?$superheroe->NombreReal:''}}">
<br>
<label for="NombreConocido">Nombre Conocido</label>
<input id="NombreConocido" type="text" name="NombreConocido" value="{{  isset($superheroe->NombreConocido)?$superheroe->NombreConocido:''}}">
<br>
<label for="InformacionAdicional">Informacion Adicional</label>
<input id="InformacionAdicional" type="text" name="InformacionAdicional" value="{{  isset($superheroe->InformacionAdicional)?$superheroe->InformacionAdicional:''}}">
<br>
<label for="Foto">Foto</label>

@if(isset($superheroe->Foto))
<img src="{{ asset('storage').'/'.$superheroe->Foto }}" width="100" alt="">
@endif

<input id="Foto" type="file" name="Foto" value="">
<br>
<input type="submit" value="Guardar Datos">
<a href="{{url('superheroe/')}}">Regresar</a>