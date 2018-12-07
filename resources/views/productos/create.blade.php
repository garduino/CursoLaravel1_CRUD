@extends("../layouts.plantilla")

@section("cabecera")


@section("contenido")


    <form method="post" action="/productos">

        <input type="text" name="NombreArticulo">

        {{csrf_field()}}

        <input type="submit" name="Enviar" value="Enviar">


    </form>