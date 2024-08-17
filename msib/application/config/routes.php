<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// application/config/routes.php
$route['default_controller'] = 'Lokasi'; // Controller default ketika aplikasi dijalankan
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routing untuk Lokasi
$route['lokasi'] = 'Lokasi/index';
$route['lokasi/create'] = 'Lokasi/create';
$route['lokasi/store'] = 'Lokasi/store';
$route['lokasi/edit/(:num)'] = 'Lokasi/edit/$1';
$route['lokasi/update/(:num)'] = 'Lokasi/update/$1';
$route['lokasi/delete/(:num)'] = 'Lokasi/delete/$1';

// Routing untuk Proyek
$route['proyek'] = 'Proyek/index';
$route['proyek/create'] = 'Proyek/create';
$route['proyek/store'] = 'Proyek/store';
$route['proyek/edit/(:num)'] = 'Proyek/edit/$1';
$route['proyek/update/(:num)'] = 'Proyek/update/$1';
$route['proyek/delete/(:num)'] = 'Proyek/delete/$1';

