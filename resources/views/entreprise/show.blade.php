@extends('layouts.default')

<style type="text/css">

			/* ALL */

			* {
				background-color: #E5E7E9;
			}

			body{
				font-family: Arial, sans-serif;
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

			/* Main Informations*/

			.form_employee {
				margin-bottom: 50px;
			}

			.civility_label {
				text-transform: uppercase;
				float: left;
				font-weight: bold;
				font-size: 25px;
				margin-bottom: 10px;
			}

			.civility {
				width: 90%;
				font-weight: bold;
			}

			.civility div {
				float: right;
				display: inline-block;
				margin-top: 20px;
			}

			.Female {
				margin-right: 100px;
			}

			.infos {
				clear: both;
			}

			.infos label {
				display: block;
			}

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
    <h1>{{ $entreprise->nom }}</h1>
    Rue : {{ $entreprise->rue }}<br/>
    Code postal : {{ $entreprise->code_postal }}<br/>
    Ville : {{ $entreprise->ville }}<br/>
    Numero de telephone : {{ $entreprise->numero }}<br/>
    Email : {{ $entreprise->email }}<br/>
    <a href="{{route('entreprise.edit',$entreprise)}}">
        <button>{{ __('edit') }}</button>
        <form method="post" class="delete_form" action="{{route('entreprise.destroy',$entreprise->id)}}">
        @method('DELETE')
        @csrf
        <button type="submit">Delete</button>
    </form>
@endsection
