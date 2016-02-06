<?php namespace One47\InfusionsoftAPI\Classes;

use Infusionsoft;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use ApplicationException;
use One47\InfusionsoftAPI\Models\Settings;

class InfusionsoftClient
{
	use \October\Rain\Support\Traits\Singleton;

	/**
	 * @var Infusionsoft API Client
	 */
	public $infusionsoft;


	protected function init()
	{
		$settings = Settings::instance();

		$infusionsoft = new Infusionsoft(array(
			'clientId' => $settings->client_id,
			'clientSecret' => $settings->client_secret,
			'redirectUri'  => $settings->redirect_uri, 
		));
	}
	// require_once 'vendor/autoload.php';

	// $infusionsoft = new \Infusionsoft\Infusionsoft(array(
	//     'clientId'     => 'XXXXXXXXXXXXXXXXXXXXXXXX',
	//     'clientSecret' => 'XXXXXXXXXX',
	//     'redirectUri'  => 'http://example.com/',
	// ));

	// // If the serialized token is available in the session storage, we tell the SDK
	// // to use that token for subsequent requests.
	// if (isset($_SESSION['token'])) {
	//     $infusionsoft->setToken(unserialize($_SESSION['token']));
	// }

	// // If we are returning from Infusionsoft we need to exchange the code for an
	// // access token.
	// if (isset($_GET['code']) and !$infusionsoft->getToken()) {
	//     $infusionsoft->requestAccessToken($_GET['code']);
	// }

	// if ($infusionsoft->getToken()) {
	//     // Save the serialized token to the current session for subsequent requests
	//     $_SESSION['token'] = serialize($infusionsoft->getToken());

	//     // MAKE INFUSIONSOFT REQUEST
	// } else {
	//     echo '<a href="' . $infusionsoft->getAuthorizationUrl() . '">Click here to authorize</a>';
	// }

}