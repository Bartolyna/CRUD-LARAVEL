<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    
    <div class="container">
        <h4>Editar empleado</h4>
        <br>
        <div class="row">
            <div class="col-xl-10">
                <form action="{{route('empleado.update', $empleado->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre Completo *</label>
                        <input type="text" class="form-control" name="nombre" required value="{{$empleado->nombre}}">
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="email">Correo electronico *</label>
                        <input type="text" class="form-control" name="email" required value="{{$empleado->email}}">
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
                        <textarea class="form-control" id="descripcion" name="descripcion" value="descripcion" rows="3" >{{$empleado->descripcion}}</textarea>
                        <input type="checkbox" name="boletin" value="1">
                        <label for="recibir" name="boletin" value="boletin" >Deseo recibir boletin informativo</label>
                    </div>
                    <hr>
                    <div>
                        <label for="roles">Roles *</label>
                        <div >
                            <input type="checkbox" id="desarrollador" name="roles" value="auxiliar">
                            <label for="desarrollador" name="roles" value="desarrollador">Profesional de proyectos - Desarrollador</label>
                      
                            <input type="checkbox" id="gerente" name="roles" value="auxiliar">
                            <label for="gerente" name="roles" value="gerente">Gerente estrategico</label>
               
                            <input type="checkbox" id="auxiliar" name="roles" value="auxiliar">
                            <label for="auxiliar" name="roles" value="auxiliar">Auxiliar administrativo</label>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/sweetAlert.js"></script>
  </body>
</html>