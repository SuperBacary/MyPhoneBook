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
 <form action="{{ route('collaborateur.update',$collaborateur->id) }}" method="post">
	 @csrf
  @method('PUT')

				<input type="hidden" id="id" name="id" min="1" max="12" value="{{$collaborateur->id}}">

				<div class="civility_label">
					<fieldset>
						<label > Civility </label>
					</fieldset>
				</div>

				<div class="civilite">
					<div class="Male">
						<label for="male"> Homme </label>
						<input type="radio" id="male" name="civilite" value="M">
					</div>
					<div class="Female">
						<label for="female"> Femme </label>
						<input type="radio" id="female" name="civilite" value="F">
					</div>
     <div class="other">
						<label for="other"> Non Binaire </label>
						<input type="radio" id="other" name="civilite" value="M">
					</div>
				</div>

				<fieldset class="infos">

					<label for="nom"> Nom </label><br/>
					<input type="text" id="nom" nom="nom" min="2" max="12" placeholder="Please fill this field" value="{{$collaborateur->nom}}">

					<label for="prenom"> Prenom </label><br/>
					<input type="text" id="prenom" name="prenom" min="2" max="12" placeholder="Please fill this field" value="{{$collaborateur->prenom}}">

					<label for="rue"> rue </label><br/>
					<input type="text" id="rue" name="rue" min="2" max="12" placeholder="Please fill this field" value="{{$collaborateur->rue}}">


					<label for="ville"> ville </label><br/>
					<input type="text" id="ville" name="ville" min="2" max="12" placeholder="Please fill this field" value="{{$collaborateur->ville}}">

					<label for="code_postal"> Code postal </label><br/>
					<input type="text" id="code_postal" name="code_postal" min="2" max="12" placeholder="Please fill this field" value="{{$collaborateur->code_postal}}">

					<label for="numero"> numero </label><br/>
					<input type="number" id="numero" name="numero" min="10" placeholder="Please fill this field" value="{{$collaborateur->numero}}">

					<label for="email"> Email </label><br/>
					<input type="email" id="email" name="email" min="6" placeholder="Please fill this field" value="{{$collaborateur->email}}">

					<label for="entreprise"> Entreprise </label><br/>
					<input type="text" id="entreprise" name="entreprise" min="6" placeholder="Please fill this field" value="{{$collaborateur->entreprise}}">

				</fieldset>

				<fieldset class="submit">
					<button type="submit" class="btn btn-primary" id="button"> Update </button>
				</fieldset>

 </form>
@endsection
