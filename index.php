<?PHP

//________________________________________________________________________ SETTING UP LIBRARIES 
require 'vendor/autoload.php';
require 'menu/index.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

// Aquí creamos la variable del request y lo llenamos 
// con lo que envía el usuario
$request = Request::createFromGlobals();

// Aquí extraemos del cuerpo del request 
// las variables que mandamos
$nombre = $request->get("nombre");

// Aquí construimos el objeto JSON y le pasamos como 
// argumento un array php con variables y sus valores
$response = new JsonResponse([
    'nombre' => $nombre
]);

// Aquí simplemente retornamos el RESPONSE que creamos 
// en el paso anterior
$response->send();


