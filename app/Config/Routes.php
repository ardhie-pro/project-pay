<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// depan routes _____________________________________________________________
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index2');

// nis _______________
$routes->get('/wemart', 'Home::p');
$routes->post('/actionindex', 'Home::actionindex');

// pass ______________
$routes->get('/password', 'Home::password');
$routes->post('/actionpass', 'Home::actionpass');
$routes->get('/nominal', 'Home::nominal');
$routes->get('/saldo', 'Home::saldo');
$routes->post('/actionnominal', 'Home::actionnominal');
$routes->get('/thanks', 'Home::thanks');
$routes->get('/blokir', 'Home::blokir');
$routes->get('/statusblokir', 'Home::statusblokir');

// tenda routes
// nis _______________
$routes->get('/tenda', 'C_Tenda::indextenda');
$routes->post('/actionindextenda', 'C_Tenda::actionindextenda');

// pass ______________
$routes->get('/passwordtenda', 'C_Tenda::passwordtenda');
$routes->post('/actionpasstenda', 'C_Tenda::actionpasstenda');
$routes->get('/nominaltenda', 'C_Tenda::nominaltenda');
$routes->get('/saldotenda', 'C_Tenda::saldotenda');
$routes->post('/actionnominaltenda', 'C_Tenda::actionnominaltenda');
$routes->get('/thankstenda', 'C_Tenda::thankstenda');
$routes->get('/blokirtenda', 'C_Tenda::blokirtenda');
$routes->get('/statusblokirtenda', 'C_Tenda::statusblokirtenda');


// MYM Routes
$routes->get('/kantin', 'Kantin::kantin');
$routes->post('/actionkantin', 'Kantin::actionkantin');

// pass ______________
$routes->get('/passwordkantin', 'Kantin::passwordkantin');
$routes->post('/actionpasskantin', 'Kantin::actionpasskantin');
$routes->get('/nominalkantin', 'Kantin::nominalkantin');
$routes->get('/saldokantin', 'Kantin::saldokantin');
$routes->post('/actionnominalkantin', 'Kantin::actionnominalkantin');
$routes->get('/thankskantin', 'Kantin::thankskantin');
$routes->get('/blokirkantin', 'Kantin::blokirkantin');
$routes->get('/statusblokir', 'Kantin::statusblokir');

// histori pengeluaran siswa_________________________________________________
$routes->get('/histori', 'Home::histori');


// login routes _____________________________________________________________

// we marts________
$routes->get('/loginwemart', 'C_Login::loginwmart');
$routes->post('/actionloginwm', 'C_Login::actionwmart');

// orangtua
$routes->get('/laporankeuangansiswa', 'C_Login::laporan');
$routes->post('/actionwalimurid', 'C_Login::actionwalimurid');
$routes->get('/dashboard', 'C_Tanggal::dashboard');
$routes->get('/dashboardmym', 'C_Tanggal::dashboardmym');
$routes->get('/aksidashboard/(:any)', 'C_Tanggal::aksidashboard/$1');
$routes->get('/aksidashboardmym/(:any)', 'C_Tanggal::aksidashboardmym/$1');
// keuangan________
$routes->get('/loginkeuangan', 'C_Login::loginadmin');
$routes->post('/actionloginkeuangan', 'C_Login::actionadmin');

// keuangan routes _____________________________________________________________
$routes->get('/keuangan', 'C_Keuangan::home');
$routes->get('/historikeuangan', 'C_Keuangan::histori');
$routes->get('/actionblokir/(:any)', 'C_Keuangan::aksiblokir/$1');
$routes->get('/actionactive/(:any)', 'C_Keuangan::aksiactivasi/$1');

// transfer routes______________________________________________________________
$routes->get('/tanggaltransfer', 'C_Transfer::lihat');
$routes->get('/historitransfer', 'C_Transfer::history');
$routes->get('/historitransferadmin/(:any)', 'C_Transfer::historyadmin/$1');

// admin Pribadi Siswa Transfer_________________________________________________
$routes->get('/adminku', 'C_Tanggal::adminku');
$routes->get('/transferku', 'C_Login::tranferku');
$routes->post('/actionku', 'C_Login::actionku');

// siswa_____________
$routes->get('/datasiswa', 'C_Keuangan::datasiswa'); // aman
$routes->post('/aksisiswa', 'C_Keuangan::inputsiswa'); //aman
$routes->get('/updatesiswa', 'C_Keuangan::updatedata'); //aman
$routes->get('/updatesiswa/(:any)', 'C_Keuangan::updatesiswa/$1'); //aman
$routes->get('/updatesiswapass/(:any)', 'C_Keuangan::updatepass/$1'); //aman
$routes->post('/actionsiswa', 'C_Keuangan::actionsiswa'); //aman
$routes->post('/actionsiswapass', 'C_Keuangan::actionsiswapass'); //aman
$routes->get('/deletesiswa/(:any)', 'C_Keuangan::deletesiswa/$1'); //aman
// user______________
$routes->get('/datauser', 'C_Keuangan::useraccount');


// wmart routes _______________________________________________________________
$routes->get('/wmart', 'C_Wemart::home');
$routes->post('/inputwemart', 'C_pengguna::inputwemart');
$routes->get('/tagihan', 'C_Wemart::tagihan');

// admin wemart________________________________________________________________
$routes->get('/userwemart', 'C_Wemart::user');
$routes->post('/inputwemart', 'C_pengguna::inputwemart');
$routes->get('/wemartupdate/(:any)', 'C_Wemart::wemartupdate/$1');
$routes->get('/updateuserwm/(:any)', 'C_Wemart::updateuserwm/$1');
$routes->post('/actionwemartuser', 'C_Wemart::actionwemartuser');
$routes->get('/deletesiswa/(:any)', 'C_Wemart::deletesiswa/$1');

// admin wemart________________________________________________________________
$routes->get('/usertenda', 'C_Wemart::user');
$routes->post('/inputwemart', 'C_pengguna::inputwemart');
$routes->get('/wemartupdate/(:any)', 'C_Wemart::wemartupdate/$1');
$routes->get('/updateuserwm/(:any)', 'C_Wemart::updateuserwm/$1');
$routes->post('/actionwemartuser', 'C_Wemart::actionwemartuser');
$routes->get('/deletesiswa/(:any)', 'C_Wemart::deletesiswa/$1');

// tanggal
$routes->get('/tanggal', 'C_Tanggal::tanggal'); //aman
$routes->post('/inputtanggal', 'C_Tanggal::inputtanggal'); //aman
$routes->get('/deletetanggal/(:any)', 'C_Tanggal::deletetanggal/$1'); //aman
$routes->get('/tanggalmasuk', 'C_Tanggal::lihat'); //aman
$routes->get('/historitanggal/(:any)', 'C_Tanggal::history/$1'); //aman

// mym
$routes->get('/tanggalmym', 'C_Tanggal::tanggalmym'); //aman
$routes->get('/aksitanggal/(:any)', 'C_Tanggal::aksitanggal/$1'); //aman

// transfer
$routes->get('/transfer', 'C_Transfer::transfer'); //aman
$routes->post('/actiontransfer', 'C_Transfer::actiontransfer'); //aman
$routes->get('/masuktransfer', 'C_Transfer::masuktransfer'); //aman
$routes->post('/rekening', 'C_Transfer::rekening'); //aman

// admin tenda
$routes->get('/admintenda', 'C_Tenda::admintenda'); //aman
$routes->get('/aksitenda/(:any)', 'C_Tenda::aksitenda/$1'); //aman

// tambah tenda

// tenda admin
$routes->get('/tendaadmin', 'C_Tenda::tendaadmin');
$routes->post('/actionlogintenda', 'C_Tenda::actionlogintenda');
$routes->get('/dashboardtenda', 'C_Tenda::dashboardtenda'); //aman


$routes->get('/logouttenda', 'C_Tenda::logout');
$routes->get('/logoutkantin', 'Kantin::logout');
$routes->get('/logouttransfer', 'C_Transfer::logout');
$routes->get('/logoutwm', 'C_Login::logout');



// template routes_____________________________________________________________
$routes->get('/logouttf', 'C_Transfer::logout');
$routes->get('/logoutkantin', 'C_Login::logoutkantin');
$routes->get('/logoutwm', 'C_Login::logoutwmart');
$routes->get('/logoutku', 'C_Login::logoutkeuangan');
