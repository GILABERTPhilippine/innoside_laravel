@extends('template')
 
@section('titre')
    Laravel discovery
@stop
 
@section('contenu')
    @parent
    <button type="button" class="btn btn-success">Détails</button>
    <h3>Les différents clients</h3>
    <p>{{$customers -> first_name}}</p>
@stop