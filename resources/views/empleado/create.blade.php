<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creacion de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h4>Crear empleado</h4>
    <div class="container">
        <div class="row">
            <div class="col-xl-10">
                <form action="{{route('empleado.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre Completo *</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="email">Correo electronico *</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="sexo">Sexo *</label>
                        
                            <input type="radio" id="masculino" name="sexo" value="masculino">
                            <label for="masculino">Masculino</label>
                                       
                            <input type="radio" id="femenino" name="sexo" value="femenino">
                            <label for="femenino">Femenino</label>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="area">Area *</label>
                        <select name="area_id" id="area_id" >
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->nombre}}</option>
                            @endforeach
                          </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="descripcion">Descripcion *</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" value="descripcion" rows="3" placeholder="Descripcion de la experiencia del empleado"></textarea>
                        <input type="checkbox" name="boletin" value="1">
                        <label for="recibir" name="boletin" value="boletin">Deseo recibir boletin informativo</label>
                    </div>
                    <hr>
                    <div>
                        <label for="roles">Roles *</label>
                        <div >
                            <div>
                            <input type="checkbox" id="desarrollador" name="roles" value="auxiliar">
                            <label for="desarrollador" name="roles" value="desarrollador">Profesional de proyectos - Desarrollador</label>
                        </div> 
                        <div >  
                            <input type="checkbox" id="gerente" name="roles" value="auxiliar">
                            <label for="gerente" name="roles" value="gerente">Gerente estrategico</label>
                        </div> 
                        <div> 
                            <input type="checkbox" id="auxiliar" name="roles" value="auxiliar">
                            <label for="auxiliar" name="roles" value="auxiliar">Auxiliar administrativo</label>
                        </div> 
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Guardar">
                        <a href="javascript:history.back()">Ir al Listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/resources/js/sweetAlert.js"></script>
</html>