<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lista de empleados</title>
</head>
<body>
    
    <div class="container-md">
    <h4>Lista de empleados</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('empleado.index')}}" method="get">
                <div class="form row">
                    <div class="col-sm-4 my-2">
                        <input type="text" class="form-control" name="texto" value="{{$texto}}">
                    </div>
                    <div class="col-auto my-2">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                    <div class="col-auto my-2">
                        <a href="{{route('empleado.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-10">
            <div class="table response">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th><i class="fas fa-user"></i>Nombre</th>
                            <th><i class="fas fa-at"></i>Email</th>
                            <th><i class="fas fa-restroom"></i>Sexo</th>
                            <th><i class="fas fa-shopping-bag"></i>Area</th>
                            <th><i class="fas fa-envelope"></i>Boletin</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($empleado)<=0)
                            <tr>
                                <td colspan="9">
                                    No se encuentran emplados                                   
                                </td>
                            </tr>
                        @else
                        @foreach ($empleado as $empl)
                        <tr>                           
                            <td>{{$empl->nombre}}</td>
                            <td>{{$empl->email}}</td>
                            <td>{{$empl->sexo}}</td>
                            <td>{{$empl->area}}</td>
                            <td>{{$empl->boletin ? 'Si' : 'No'}}</td>  
                            <td><a href="{{route('empleado.edit', $empl->idempleado)}}"><button id="" title="" value="" class="btn "><i class="fas fa-edit"></i></button></a></td>  
                            <td>
                                <button type="button" class="btn " data-toggle="modal" data-target="#modal-delete-{{$empl->idempleado}}">
                                    <i class="fas fa-trash-alt"></i>
                                  </button>
                            </td>                     
                        </tr>
                        @include('empleado.delete')
                        @endforeach 
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>