@extends("../layouts.plantilla")

@section("cabecera")

INSERTAR REGISTROS

@endsection



@section("contenido")

    <!--<form  method="post" action="/productos">--> 
    {!! Form::open(['url' => '/productos', 'method' => 'post', 'files'=>true]) !!}
    {{csrf_field()}}
        <table>
            <tr>
                <td>{!! Form::file('file') !!}</td>
            </tr>
        </table>
        <table>
            <tr>
                <td>{!! Form::label('nombre', 'Nombre:') !!}</td>
                <!--<td><input type="text" name="NombreArticulo"></td>-->
                <td> {!! Form::text('NombreArticulo') !!}</td>
                
            </tr>

            <tr>
                <td>{!! Form::label('seccion', 'Sección:') !!}</td>
                <td> {!! Form::text('Seccion') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('precio', 'Precio:') !!}</td>
                <td> {!! Form::text('Precio') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('fecha', 'Fecha:') !!}</td>
                <td> {!! Form::text('Fecha') !!}</td>
            </tr>
            <tr>
                <td>{!! Form::label('paisOrigen', 'País de Origen:') !!}</td>
                <td> {!! Form::text('PaisOrigen') !!}</td>
            </tr>
            <tr>
               <!-- <td><input type="submit" name="enviar" value="Enviar"></td>-->
                <td>{!! Form::submit('Enviar') !!}</td>
                <!--<td><input type="reset" name="Borrar" value="Borrar"></td>-->
                <td>{!! Form::reset('Borrar') !!}</td>
            </tr>
        
        </table>
        
   <!-- </form> -->
   {!! Form::close() !!}

   @if(count($errors)>0)

   <ul>

        @foreach($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach
    </ul>
   @endif
@endsection

@section("pie")

@endsection
