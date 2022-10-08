@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

<div class="container bg-white">
<img class="img-fluid"src="../images/bueno.png" alt="Logo ut"  style="display:block; margin:auto;"/><br>
</div>
<div class="p-3">
<table  class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Tipo</th>
      <th>
      Cuerpo Academico
 </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombre del cuerpo academico</th>
      <td>{{ $nombre }}</td>
    </tr>
    <tr>
      <th scope="row">Clave</th>
      <td>{{ $clave }}</td>
    </tr>
    <tr>
      <th scope="row">Grado de consolidacion</th>
      <td>{{ ($grado) }}</td>
    </tr>
    <tr>
      <th scope="row">Linea(s) que cultiva el cuerpo academico</th>
      <td>{{ ($lineas) }}</td>
    </tr>
   </tbody>
</table>
   

</div >
@endsection