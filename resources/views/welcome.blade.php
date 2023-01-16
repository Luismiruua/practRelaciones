<!DOCTYPE html>
<html>

    <body>
        @foreach ($alumnos as $alumno)
            {{$alumno->id}}
            {{$alumno->nombre}} 
            {{$alumno->edad}} 
            {{$alumno->sexo}}
        @endforeach
        @foreach ($extraescolar->extraescolares as $reg)
        {{$registro->id}}
        {{$registro->nombre}} 

    @endforeach
    </body>
</html>
