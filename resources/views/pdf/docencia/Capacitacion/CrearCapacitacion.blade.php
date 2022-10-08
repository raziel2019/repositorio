@extends('layouts.app')

@section('Titulo', 'Repositorio de investigaciones ')

@section('content')

    <div class="panel-header colorut" >
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-black pb-2 fw-bold">Docencia</h2>
                </div>      
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Crear capacitacion</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('capacitacion.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Tipo</label>
                                    <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="tipo" required>
                                        <option value="Taller">Taller</option>
                                        <option value="Curso">Curso</option>      
                                    </select>
                                </div> 
                                <div class="form-group col-md-4">
	                                <label for="inputPassword4">Periodo</label>
	                                <select class="custom-select border border-secondary" id="inputGroupSelect01"  name="cuatrimestre" required>
                                  <option value="Enero-Abril">Enero-Abril</option>
                                  <option value="Mayo-Agosto">Mayo-Agosto</option>     
                                  <option value="Septiembre-Diciembre">Septiembre-Diciembre</option>     
                                  <option value="N/A">N/A</option>  
                                	</select>
	                            </div>
                                 <div class="form-group col-md-4">
                                    <label for="inputEmail4">Nombre</label>
                                    <input type="text" class="form-control border border-secondary" id="inputEmail4" placeholder="Nombre" name="nombre" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="comment">Descripcion</label>
                                    <textarea class="form-control border border-secondary" id="comment" rows="5" placeholder="Descripcion" name="descripcion" required>

                                    </textarea>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Duracion</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Duracion" name="duracion" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Lugar</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Lugar" name="lugar" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCity">Fecha</label>
                                    <input type="date" class="form-control border border-secondary" id="inputDate" name="fecha" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Instructor</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Nombre del instructor" name="instructor" required>
                                </div>
                                <div class="form-group col-md-4">
                                <label for="inputState">Captura de evidencia</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" id="validatedCustomFile" required >
                                    <label class="custom-file-label  border border-secondary" for="validatedCustomFile">Archivo..</label>
                                </div>
                            </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Grupo</label>
                                    <input type="text" class="form-control border border-secondary" id="inputPassword4" placeholder="Grupo" name="grupo" required>
                                </div>
                            </div>
                    
                                <br>
                                <button type="submit" class="btn btn-primary" style="background: #69bb85!important; border-color:#69bb85!important;">Subir Archivo</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection