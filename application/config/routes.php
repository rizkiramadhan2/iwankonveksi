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

$route['beranda'] = 'view';

//menu
$route['desain'] = 'view/v_desain/tb_desain';
$route['desain-more/(:num)'] = 'view/v_desain_more/tb_desain/3/$1';
$route['jenis-bahan'] = 'view/v_jenisbahan';
$route['jenis-bahan-baju'] = 'view/v_tampil_tabel/db_jenis_bahan_baju';
$route['jenis-bahan-kaos'] = 'view/v_tampil_tabel/db_jenis_bahan_kaos';
$route['jenis-bahan-jaket-singleside'] = 'view/v_tampil_tabel/db_jenis_bahan_jaket1';
$route['jenis-bahan-jaket-doubleside'] = 'view/v_tampil_tabel/db_jenis_bahan_jaket2';
$route['desain-img/(:num)'] = 'view/v_modal_desain/tb_desain/$1';
//produk
$route['produk-kaos'] = 'view/v_produk/1';
$route['produk-jaket'] = 'view/v_produk/2';
$route['produk-kemeja'] = 'view/v_produk/3';
$route['produk-polo'] = 'view/v_produk/4';
$route['produk-jersey'] = 'view/v_produk/Jersey';
$route['produk-topi'] = 'view/v_produk/Topi';
$route['produk-lain'] = 'view/v_produk/Lain-Lain';

//galeri
$route['galeri'] = 'view/v_galeri';

//pemesanan
$route['pemesanan'] = 'view/v_pemesanan';

//kontak
$route['kontak'] = 'view/v_kontak';

//footer-visitor
$route['lookup_visitor']= 'view/visitor';



$route['default_controller'] = 'view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
