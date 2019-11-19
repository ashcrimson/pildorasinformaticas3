@extends("../layouts.plantilla")

@section("cabecera")

EDITAR REGISTROS

@endsection



@section("contenido")

    <!--<form  method="post" action="/productos/{{$producto->id}}">-->
    {!! Form::model ($producto, ['method'=>'POST', 'action'=>['ProductosController@update', $producto->id]])!!}
    {{csrf_field()}}
    @method('PATCH')
        <table>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}"></td>
                
            </tr>

            <tr>
                <td>Sección: </td>
                <td><input type="text" name="Seccion" value="{{$producto->Seccion}}"></td>
            </tr>
            <tr>
                <td>Precio: </td>
                <td><input type="text" name="Precio" value="{{$producto->Precio}}"></td>
            </tr>
            <tr>
                <td>Fecha: </td>
                <td><input type="text" name="Fecha" value="{{$producto->Fecha}}"></td>
            </tr>
            <tr>
                <td>País de Origen: </td>
                <td><input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" value="Actualizar"></td>
                <td><input type="reset" name="Borrar" value="Borrar campos"></td>
            </tr>
        
        </table>
        
    <!--</form>--> 
    {!! Form::close() !!}
    <!--<form  method="post" action="/productos/{{$producto->id}}">-->
    {!! Form::open (['method'=>'DELETE', 'action'=>['ProductosController@destroy', $producto->id]])!!}

        {{csrf_field()}}
       
        <input type="submit" value="Eliminar registro">
    <!--</form> --> 
    {!! Form::close() !!}
@endsection

@section("pie")

@endsection
