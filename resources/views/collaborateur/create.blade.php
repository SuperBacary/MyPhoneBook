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
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('collaborateur.store') }}" method="POST">
				@csrf
				</fieldset>

				<div class="civility_label">
					<fieldset>
						<label > Collaborateur </label>
					</fieldset>
				</div>

				<div class="civilite">
					<div class="Homme">
						<label for="Homme"> Homme </label>
						<input type="radio" id="Homme" name="civilite" value="Homme">
					</div>
					<div class="Femme">
						<label for="Femme"> Femme </label>
						<input type="radio" id="Femme" name="civilite" value="Femme">
					</div>
                    <div class="Non_binaire">
						<label for="Non_binaire"> Non Binaire </label>
						<input type="radio" id="Non_binaire" name="civilite" value="Non-binaire">
					</div>
				</div>

				<fieldset class="infos">

					<label for="Nom"> Nom </label><br/>
					<input type="text" id="nom" name="nom" min="2" max="12" placeholder="Complétez ce champ">

					<label for="Prenom"> Prenom </label><br/>
					<input type="text" id="prenom" name="prenom" min="2" max="12" placeholder="Complétez ce champ">

					<label for="Rue"> Rue </label><br/>
					<input type="text" id="rue" name="rue" min="2" max="12" placeholder="Complétez ce champ">

					<label for="Ville"> Ville </label><br/>
					<input type="text" id="ville" name="ville" min="2" max="12" placeholder="Complétez ce champ">

					<label for="Code_postal"> Code postal </label><br/>
					<input type="text" id="code_postal" name="code_postal" min="2" max="12" placeholder="Complétez ce champ">

					<label for="numero"> Numero de telephone </label><br/>
					<input type="number" id="numero" name="numero" min="10" placeholder="Complétez ce champ">

					<label for="email"> Email </label><br/>
					<input type="email" id="email" name="email" min="6" placeholder="Complétez ce champ">

					<label for="entreprise"> Entreprise </label><br/>
					<input type="text" id="entreprise" name="entreprise" min="6" placeholder="Complétez ce champ">

				</fieldset>

				<fieldset class="submit">
					<button type="submit" class="btn btn-primary" id="button"> Valider </button>
				</fieldset>
			</form>
@endsection
