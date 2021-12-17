@extends('layouts.default')

<style type="text/css">

            /* ALL */

            * {
                background-color: #E5E7E9;
            }

            body{
                font-family: Arial, sans-serif;
            }

            a {
                text-decoration: none;
                text-transform: uppercase;
                color: #54a6b1;
                font-weight: bold;
            }

            fieldset {
                 border: none;
            }

            input:focus {
                 outline: none;
                 border-bottom: 1px solid #54A6B1;
            }

            /* Main */

            main {
                clear: both;
                margin-left: 50px;
            }

            main form fieldset legend {
                border-bottom: 5px solid #000;
                width: 90%;
                font-weight: bold;
                font-size: 25px;
                margin-bottom: 10px;
            }

            main fieldset legend img {
                width: 40px;
                height: 50px;
            }

            main form fieldset label {
                text-transform: uppercase;
                font-weight: bold;
                margin-top: 15px;
            }

            main form fieldset input {
                border: none;
                border-bottom: 1px solid #000;
                width: 90%;
                margin-bottom: 15px;
            }

            /* Main  FORM company*/

            .infos {
                margin-top : 50px;
                clear: both;
            }

            .infos label {
                display: block;
            }

            /* Main SUBMIT */

            #button {
                text-transform: uppercase;
                width: 100px;
                height: 65px;
                color: #FFF;
                background-color: #000;
                float: left;
                margin-top: 50px;
                border: none;
            }

            #button:hover {
                background-color: #FFF;
                color: #000;
                border: 1px solid #000;
            }

        </style>

@section('main')
    <form action="{{ route('entreprise.update',$entreprise->id) }}" method="post">
     @csrf
     @method('PUT')


                <fieldset class="infos">

     <input type="hidden" id="id" name="id" min="1" max="12" value="{{$entreprise->id}}">

                    <label for="nom"> nom </label><br/>
                    <input type="text" id="nom" name="nom" min="2" max="12" placeholder="Complétez ce champ" value="{{$entreprise->nom}}">

                    <label for="rue"> rue </label><br/>
                    <input type="text" id="rue" name="rue" min="2" max="12" placeholder="Complétez ce champ" value="{{$entreprise->rue}}">

                    <label for="ville"> ville </label><br/>
                    <input type="text" id="ville" name="ville" min="2" max="12" placeholder="Complétez ce champ" value="{{$entreprise->ville}}">

                    <label for="code_postal"> Zip Code </label><br/>
                    <input type="text" id="code_postal" name="code_postal" min="2" max="12" placeholder="Complétez ce champ" value="{{$entreprise->code_postal}}">

                    <label for="numero"> Phone number </label><br/>
                    <input type="number" id="numero" name="numero" min="10" placeholder="Complétez ce champ" value="{{$entreprise->numero}}">

                    <label for="email"> Email </label><br/>
                    <input type="email" id="email" name="email" min="6" placeholder="Complétez ce champ" value="{{$entreprise->email}}">
                </fieldset>

        <fieldset class="submit">
            <button type="submit" class="btn btn-primary" id="button"> Update </button>
        </fieldset>

    </form>
@endsection
