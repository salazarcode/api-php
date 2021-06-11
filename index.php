<?PHP

//________________________________________________________________________ SETTING UP LIBRARIES 
require 'vendor/autoload.php';
require 'menu/index.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Dotenv\Dotenv;


//________________________________________________________________________ CONFIG
$request = Request::createFromGlobals();
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


//________________________________________________________________________ PROCESS
$mensaje = $_ENV["MENSAJE"];

if($request->isMethod("GET")){
    $input = $request->query->get('seleccion');


    $response = new JsonResponse([
        'mensaje' => $mensaje,
        'method' => $request->isMethod("GET") ? "GET" : "POST",
        "json" => json_decode($json_str)
    ]);
    
    $response->send();
}



