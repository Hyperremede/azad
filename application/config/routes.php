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



			/***  customer Route ****/
$route['public/n-customer'] = "home/newCustomer";
$route['public/customer-l'] = "home/customerList";

			/***  Sales Route ****/
$route['public/n-s-person'] = "home/newSalesPerson";
$route['public/n-s-l']	= "home/salesList";


			/***  Product Route ****/
$route['public/n-product'] = "home/newProductEntry";
$route['public/n-s-product-l'] = "home/productList";


			/***  Invoice Route ****/
//$route['public/invoice'] = "home/newInvoice";
//$route['public/n-s-product-l'] = "home/productList";

			/***  Login Route ****/
$route['public/signin'] = "home/login";

			/***  Invoice Route ****/



$route['public/invoice'] = "home/newInvoice";
$route['public/invoice-d'] = "home/InvoiceDesign";
// f8e22f6cbc5023ba323552565312fbac6ac85497

			





$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
