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
$route['default_controller'] = "login";
$route['404_override'] = 'error_404';
$route['translate_uri_dashes'] = FALSE;


/*********** USER DEFINED ROUTES *******************/

$route['loginMe'] = 'login/loginMe';
$route['dashboard'] = 'user';
$route['logout'] = 'user/logout';
$route['userListing'] = 'user/userListing';
$route['userListing/(:num)'] = "user/userListing/$1";
$route['addNew'] = "user/addNew";
$route['addNewUser'] = "user/addNewUser";
$route['editOld'] = "user/editOld";
$route['editOld/(:num)'] = "user/editOld/$1";
$route['editUser'] = "user/editUser";
$route['deleteUser'] = "user/deleteUser";
$route['profile'] = "user/profile";
$route['profile/(:any)'] = "user/profile/$1";
$route['profileUpdate'] = "user/profileUpdate";
$route['profileUpdate/(:any)'] = "user/profileUpdate/$1";

$route['loadChangePass'] = "user/loadChangePass";
$route['changePassword'] = "user/changePassword";
$route['changePassword/(:any)'] = "user/changePassword/$1";
$route['pageNotFound'] = "user/pageNotFound";
$route['checkEmailExists'] = "user/checkEmailExists";
$route['login-history'] = "user/loginHistoy";
$route['login-history/(:num)'] = "user/loginHistoy/$1";
$route['login-history/(:num)/(:num)'] = "user/loginHistoy/$1/$2";

$route['forgotPassword'] = "login/forgotPassword";
$route['resetPasswordUser'] = "login/resetPasswordUser";
$route['resetPasswordConfirmUser'] = "login/resetPasswordConfirmUser";
$route['resetPasswordConfirmUser/(:any)'] = "login/resetPasswordConfirmUser/$1";
$route['resetPasswordConfirmUser/(:any)/(:any)'] = "login/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] = "login/createPasswordUser";

//propertys
//rant
$route['post-residential-rent-property'] = "Property/addNewResidentialRent";
$route['ResidentialRentAddProperty'] = "Property/addNewResidentialRentProperty";
$route['ResidentialRentList'] = 'Property/ResidentialRentList';
$route['ResidentialRentList/(:num)'] = "user/ResidentialRentList/$1";
$route['editresidentialrentproperty/(:any)'] = "Property/editResidentialRentProperty/$1";
$route['EditResidentialRentAddProperty'] = "Property/editNewResidentialRentProperty";
$route['deleteResidentialRentProperty'] = "Property/deleteResidentialRentProperty";

//resale  
$route['AddResidentialResaleProperty'] = "Property/addNewResidentialResale";
$route['ResidentialResaleAddProperty'] = "Property/addNewResidentialResaleProperty";
$route['ResidentialResaleList']        = 'Property/ResidentialResaleList';
$route['ResidentialResaleList/(:num)'] = "user/ResidentialResaleList/$1";
$route['editResidentialResaleProperty/(:any)'] = "Property/editResidentialResaleProperty/$1";
$route['EditResidentialResalePropertyPost'] = "Property/EditResidentialResalePropertyPost";
$route['deleteResidentialResaleProperty'] = "Property/deleteResidentialResaleProperty";


//PG	  
$route['AddResidentialPgProperty'] = "Property/AddResidentialPgProperty";
$route['ResidentialPgAddProperty'] = "Property/ResidentialPgAddProperty";
$route['ResidentiaPGList'] = 'Property/ResidentiaPGList';
$route['ResidentiaPGList/(:num)'] = "user/ResidentiaPGList/$1";
$route['editResidentiaPGProperty/(:any)'] = "Property/editResidentiaPGProperty/$1";
$route['EditResidentiaPGAddProperty'] = "Property/EditResidentiaPGAddProperty";
$route['deleteResidentiaPGProperty'] = "Property/deleteResidentiaPGProperty";


//Flatmate	  
$route['addNewResidentialFlatmate'] = "Property/addNewResidentialFlatmate";
$route['ResidentialFlatmateAddProperty'] = "Property/ResidentialFlatmateAddProperty";
$route['ResidentialFlatmateList'] = 'Property/ResidentialFlatmateList';
$route['ResidentialFlatmateList/(:num)'] = "user/ResidentialFlatmateList/$1";
$route['editResidentialFlatmateProperty/(:any)'] = "Property/editResidentialFlatmateProperty/$1";
$route['EditResidentialFlatmateAddProperty'] = "Property/EditResidentialFlatmateAddProperty";
$route['deleteResidentialFlatmateProperty'] = "Property/deleteResidentialFlatmateProperty";

//commercial sale	  
$route['addNewCommercialSale'] = "Property/addNewCommercialSale";
$route['CommercialSaleAddProperty'] = "Property/CommercialSaleAddProperty";
$route['CommercialSaleList'] = 'Property/CommercialSaleList';
$route['CommercialSaleList/(:num)'] = "user/CommercialSaleList/$1";
$route['editCommercialSaleProperty/(:any)'] = "Property/editCommercialSaleProperty/$1";
$route['EditCommercialSaleAddProperty'] = "Property/EditCommercialSaleAddProperty";
$route['deleteCommercialSaleProperty'] = "Property/deleteCommercialSaleProperty";
//commercial Rent	
$route['addNewCommercialRent'] = "Property/addNewCommercialRent";
$route['CommercialRentAddProperty'] = "Property/CommercialRentAddProperty";
$route['CommercialRentList'] = 'Property/CommercialRentList';
$route['CommercialRentList/(:num)'] = "user/CommercialRentList/$1";
$route['editCommercialRentProperty/(:any)'] = "Property/editCommercialRentProperty/$1";
$route['EditCommercialRentAddProperty'] = "Property/EditCommercialRentAddProperty";
$route['deleteCommercialRentProperty'] = "Property/deleteCommercialRentProperty";
/* End of file routes.php */
/* Location: ./application/config/routes.php */
$route['proidtest'] = "Property/proidtest";
$route['proidtestupload'] = "Property/proidtestupload";