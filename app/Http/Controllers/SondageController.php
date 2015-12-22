<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Gestion\SondageGestion;
use App\Http\Requests\SondageRequest;

class SondageController extends Controller
{

	/**
	 * Instance de SondageGestion
	 *
	 * @var Lib\Gestion\SondageGestion
	 */
	protected $sondageGestion;

	/**
	 * Crée une nouvelle instance de SondageController
	 *
	 * @param Lib\Validation\SondageGestion $sondageGestion
	 * @return void
	 */
	public function __construct(SondageGestion $sondageGestion)
	{
		// On initialise la propriété pour la gestion
		$this->sondageGestion = $sondageGestion;
	}

	/**
	 * Traitement de l'URL de base : on affiche tous les sondages
	 *
	 * @return View
	 */
	public function getIndex() 
	{
		// Ici on doit retourner la vue "index" en lui transmettant un paramètre "sondage" contenant les sondage
		// C'est la méthode "getSondages" de la gestion qui est chargée de livrer les éléments de ces sondages
	}

	/**
	 * Traitement de la demande du formulaire de vote
	 *
	 * @param  string $nom
	 * @return View
	 */
	public function getVote($nom)
	{
		// Ici on doit envoyer la vue "sondage" qui contient le formulaire du sondage
		// C'est la méthode "getSondage" de la gestion qui est chargée de livrer les informations du sondage
		// On doit transmettre 2 paramètres à la vue : "sondage" pour les informations du sondage et "nom" pour le nom du sondage
	}

	/**
	 * Traitement du formulaire de vote
	 *
	 * @param  string $nom
	 * @param  App\Http\Requests\SondageRequest $request
	 * @return Redirect
	 */
	public function postVote($nom, SondageRequest $request)
	{
		// La validation a réussi 
		if($this->sondageGestion->save($nom, $request->all())) 
		{
			// Ici on doit envoyer la vue "resultats" qui contient les résultats du sondage
			// C'est la méthode "getSondage" de la gestion qui est chargée de livrer les informations du sondage
			// C'est la méthode "getResults" de la gestion qui est chargée de livrer les résultats du sondage
			// On doit transmettre 3 paramètres à la vue : 
			// - "sondage" pour les informations du sondage 
			// - "resultats" pour les résultats du sondage 
			// - "nom" pour le nom du sondage
		}

		// Ici comme l'Email a déjà été utilisé on doit rediriger sur la même requête avec la méthode "back" de la classe Redirect
		// On doit transmettre en session flash avec le nom "error" l'informations
		// "Désolé mais cet Email a déjà été utilisé pour ce sondage !"
		// On doit transmettre aussi les anciennes saisies
	}

}