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

$route['default_controller'] = 'Authentication/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// Route Auth
$route['pupr/login'] = 'Authentication/login' ;
$route['pupr/register'] = 'Authentication/register' ;
$route['pupr/password/forgot'] = 'Authentication/forgot_password' ;
$route['pupr/password/reset/(:any)'] = 'Authentication/change_password/$1' ;
$route['pupr/email/verification/(:any)'] = 'Authentication/email_verification/$1' ;

// Route dashboard
$route['pupr/dashboard'] = 'Dashboard/dashboard' ;

// Route events
$route['pupr/events'] = "Kegiatan/seluruh";
$route['pupr/events/my'] = "Kegiatan/my";
$route['pupr/events/finished'] = "Kegiatan/selesai";
$route['pupr/events/date'] = "Kegiatan/tanggal";
$route['pupr/events/month'] = "Kegiatan/bulan";
$route['pupr/events/detail/(:any)'] = "Kegiatan/detail/$1";
$route['pupr/events/participants/(:any)/(:any)'] = "Kegiatan/peserta/$1/$2";
$route['pupr/events/add'] = "Kegiatan/tambah";
$route['pupr/events/update/(:any)'] = "Kegiatan/edit/$1";

// Route experts
$route['pupr/experts'] = "Tenaga_ahli/Seluruh";
$route['pupr/experts/area/(:any)/(:any)'] = "Tenaga_ahli/daerah/$1/$2";
$route['pupr/experts/detail/(:any)'] = "Tenaga_ahli/detail/$1";

// Route participant
$route['pupr/participant'] = "Peserta/seluruh";
$route['pupr/participant/area/(:any)'] = "Peserta/daerah/$1";
$route['pupr/participant/detail/(:any)'] = "Peserta/detail/$1";

// Route pocketbook
$route['pupr/pocketbook'] = "Buku_saku/seluruh";
$route['pupr/pocketbook/detail/(:any)'] = "Buku_saku/detail/$1";

// Route administration
$route['pupr/administration'] = "Administrasi_kegiatan/seluruh";
$route['pupr/administration/detail/(:any)'] = "Administrasi_kegiatan/detail/$1";

// Route skkni
$route['pupr/skkni'] = "SKA/seluruh";
$route['pupr/skkni/detail/(:any)'] = "SKA/detail/$1";

// Route modul
$route['pupr/modul'] = "Modul/seluruh";
$route['pupr/modul/detail/(:any)'] = "Modul/detail/$1";

//route news
$route['pupr/news'] = "Berita/seluruh";
$route['pupr/news/detail/(:any)'] = "Berita/detail/$1";

//route profile
$route['pupr/profile'] = "User/profile";
$route['pupr/news/detail/(:any)'] = "Berita/detail/$1";

//route feedback
$route['pupr/feedback'] = "Feedback/seluruh";

//route master
$route['pupr/master'] = "Master/seluruh";

//route Infografis Data Mitra
$route['pupr/mitra'] = "Infografis_data/mitra";

//route Infografis Data Mitra
$route['pupr/mitra_file'] = "Infografis_data/mitra_file";

//route Infografis Data Instruktur
$route['pupr/instruktur'] = "Infografis_data/instruktur";

//route Infografis Data Instruktur
$route['pupr/instruktur_file'] = "Infografis_data/instruktur_file";

//route Infografis Data Asesor
$route['pupr/asesor'] = "Infografis_data/asesor";

//route Infografis Data Asesor
$route['pupr/asesor_file'] = "Infografis_data/asesor_file";

//route Infografis Data SE Kepala Daerah
$route['pupr/se_kepala_daerah'] = "Infografis_data/se_kepala_daerah";

//route Infografis Data SE Kepala Daerah
$route['pupr/se_kepala_daerah_file'] = "Infografis_data/se_kepala_daerah_file";

//route Infografis Data Capaian Output
$route['pupr/capaian_output'] = "Infografis_data/capaian_output";

//route Infografis Data Capaian Output
$route['pupr/capaian_output_file'] = "Infografis_data/capaian_output_file";

//route Profile
$route['pupr/profile'] = "User/profile";

//route privacy & policy
$route['privacy-policy'] = "Common/privacy";

//route terms & condition
$route['terms-and-conditions'] = "Common/terms";

// route public page
$route['public'] = "Public_page/index";

