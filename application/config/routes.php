<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['(:any)'] = 'main/view/$1';
$route['infoCampanha/(:num)'] = 'main/infoCampanha/$1';

$route['verify/(:any)'] = 'authentication/verify/$1';

$route['admin'] = 'main/admin';
$route['admin/(:any)'] = 'main/admin/$1';

/* API GET's */
// Empresas
$route['api/empresa']['get'] = 'api/informacoesEmpresas';
$route['api/empresa/(:num)']['get'] = 'api/informacoesEmpresa/$1';

$route['api/empresa/(:num)/rating'] = 'api/ratingEmpresa/$1';

$route['api/empresa/(:num)/campanha']['get'] = 'api/campanhasEmpresa/$1';
$route['api/empresa/(:num)/campanha/(:num)']['get'] = 'api/campanhaEmpresa/$1/$2';

$route['api/empresa/(:num)/campanha/(:num)/instanciascampanha']['get'] = 'api/instanciasCampanhaEmpresa/$1/$2';

$route['api/empresa/(:num)/cartao']['get'] = 'api/cartoesEmpresa/$1';

$route['api/empresa/(:num)/colaborador']['get'] = 'api/colaboradoresEmpresa/$1';
$route['api/empresa/(:num)/colaborador/(:any)']['get'] = 'api/colaboradorEmpresa/$1/$2';

// Clientes
$route['api/cliente']['get'] = 'api/informacoesClientes';
$route['api/cliente/(:num)']['get'] = 'api/informacoesCliente/$1';

$route['api/cliente/(:num)/rating'] = 'api/ratingCliente/$1';

$route['api/cliente/(:num)/cartao']['get'] = 'api/cartoesCliente/$1';
$route['api/cliente/(:num)/cartao/(:num)']['get'] = 'api/cartaoCliente/$1/$2';

$route['api/cliente/(:num)/cartao/(:num)/instanciacampanha']['get'] = 'api/instanciasCampanhaCartaoCliente/$2';
$route['api/cliente/(:num)/cartao/(:num)/instanciacampanha/(:num)']['get'] = 'api/instanciaCampanhaCartaoCliente/$1/$2/$3';

/* API POST's */
// Empresas
$route['api/empresa']['post'] = 'api/novaEmpresa';
$route['api/empresa/(:num)/campanha/(:num)/instanciacampanha/(:num)']['post'] = 'api/alterarInstanciaCampanhaEmpresa/$1/$2/$3';
$route['api/empresa/(:num)/colaborador']['post'] = 'api/novoColaboradorEmpresa/$1';

/* API DELETE's */
// Empresas
$route['api/empresa/(:num)/colaborador/(:any)']['delete'] = 'api/eliminarColaboradorEmpresa/$1/$2';
