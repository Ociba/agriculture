<?php

//use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
Route::get('/try', function () {
   return view('crudd');
});
Route::get('/display-item','ProduceController@index');

Route::group(['middleware' => ['auth']], function () {
Route::get('/home-dash','HomeController@index')->name('Dashboard');
//Bought
 Route::get('/display-bought-form','BoughtController@boughtForm');
 Route::get('/display-edit-bought-items','BoughtController@editBoughtItemsForm');
 Route::post('/save-items-bought','BoughtController@createBoughtItem');
 Route::get('/display-items-bought','BoughtController@displayBoughtItems');
 Route::get('/search-items-bought','BoughtController@searchBoughtItems');
 Route::post('/save-edited-bought-items/{id}','BoughtController@updateBoughtItems');
 Route::get('/delete-bought-item/{id}','BoughtController@deleteBoughtItems');
//Breed
Route::get('/add-breed-form','BreedController@addBreedForm')->name('Add Breed');
Route::get('/edit-breed-form/{id}','BreedController@editBreedForm')->name('Edit Breed');
Route::post('/save-breed','BreedController@createBreed');
Route::get('/display-breed','BreedController@displayBreed')->name('Breed Table');
Route::get('/search-breed','BreedController@searchBreed');
Route::post('/save-edited-breed/{id}','BreedController@updateBreedInformation');
Route::get('/delete-breed/{id}','BreedController@deleteBreed');
//Category
Route::get('/add-category-form','CategoryController@AddCategoryForm')->name('Add Category');
Route::get('/edit-category-form/{id}','CategoryController@editCategoryForm')->name('Edit Category');
Route::post('/save-category','CategoryController@createCategory');
Route::get('/display-categories','CategoryController@displayCategory')->name('Categories Table');
Route::get('/search-category','CategoryController@searchCategory');
Route::post('/save-edited-category/{id}','CategoryController@updateCategoryInformation');
Route::get('/delete-category/{id}','CategoryController@deleteCategory');
//County
Route::get('/display-add-county-form','CountyController@addCountyForm')->name('Add County Form');
Route::get('/edit-county/{id}','CountyController@editCountyForm')->name('Edit County');
Route::post('/save-county','CountyController@createCounty');
Route::get('/display-counties','CountyController@displayCounty')->name('Counties Table');
Route::get('/search-county','CountyController@searchCounty')->name('Searched County');
Route::post('/save-updated-county/{id}','CountyController@updateCountyInformation');
Route::get('/delete-county/{id}','CountyController@deleteCounty');
//Diseases
Route::get('/display-add-disease-form','DiseaseController@addDiseaseForm')->name('Add Disease Form');
Route::get('/edit-disease-form/{id}','DiseaseController@editDiseaseForm')->name('Edit Disease Form');
Route::post('/save-disease','DiseaseController@createDisease');
Route::get('/display-all-diseases','DiseaseController@displayDisease')->name('Disease Table');
Route::get('/search-disease','DiseaseController@searchDisease')->name('Searched Disease');
Route::post('/update-disease/{id}','DiseaseController@updateDiseaseInformation');
Route::get('/delete-disease/{id}','DiseaseController@deleteDisease');

//Signs and Symptoms
Route::get('/add-signs-form','SignsSymptomsController@addSignsSymptomsForm')->name('Add Signs Form');
Route::get('/edit-signs/{id}','SignsSymptomsController@editSignsSymptomsForm')->name('Edit Signs Form');
Route::post('/save-signs','SignsSymptomsController@createSignsSymptoms');
Route::get('/show-signs','SignsSymptomsController@displaySignsSymptoms')->name('Signs Table');
Route::get('/search-signs','SignsSymptomsController@searchSignsSymptoms')->name('Searched Signs');
Route::post('/update-signs/{id}','SignsSymptomsController@updateSignsSymptomsInformation');
Route::get('/delete-signs/{id}','SignsSymptomsController@deleteSignsSymptoms');

//Pest
Route::get('/add-pest-form','PestController@addPestForm')->name('Add Pest Form');
Route::get('/edit-pest-form/{id}','PestController@editPestForm')->name('Edit Pest Form');
Route::post('/save-pest','PestController@createPest');
Route::get('/display-pest-table','PestController@displayPest')->name('Pests Table');
Route::get('/search-pest','PestController@searchPest')->name('Searched Pest');
Route::post('/update-pest/{id}','PestController@updatePestInformation');
Route::get('/delete-pest/{id}','PestController@deletePest');
//District
Route::get('/display-add-disrict-form','DistrictController@addDistrictForm')->name('Add District Form');
Route::get('/edit-district/{id}','DistrictController@editDistrictForm')->name('Edit District Form');
Route::post('/save-district','DistrictController@createDistrict');
Route::get('/display-all-disricts','DistrictController@displayDistrict')->name('District Table');
Route::get('/search-districts','DistrictController@searchDistrict')->name('Searched District');
Route::post('/update-district/{id}','DistrictController@updateDistrictInformation');
Route::get('/delete-district/{id}','DistrictController@deleteDistrict');
//Drug
Route::get('/display-add-drug-form','DrugController@addDrugForm')->name('Add Drugs Form');
Route::post('/save-drug','DrugController@createDrug');
Route::get('/display-all-drugs','DrugController@displayDrugs')->name('Drugs Table');
Route::get('/search-drug','DrugController@searchDrug')->name('Searched Drugs');
Route::get('/edit-drug-form/{id}','DrugController@editDrugForm')->name('Edit Drugs Form');
Route::post('/update-drug/{id}','DrugController@updateDrugInformation');
Route::get('/delete-drug/{id}','DrugController@deleteDrug');
//Employees
Route::get('/edit-employee/{id}','EmployeesController@editEmployeesForm')->name('Edit Employee');
Route::get('/display-employees-form','EmployeesController@addEmployeesForm')->name('Employees-form');
Route::post('/save-employee','EmployeesController@createEmployee');
Route::get('/display-employees-details','EmployeesController@displayEmployees')->name('Employees Table');
Route::get('/search-employee','EmployeesController@searchEmployees')->name('Searched Employee');
Route::post('/update-employee/{id}','EmployeesController@updateEmployeesInformation');
Route::get('/delete-employee/{id}','EmployeesController@deleteEmployee');
//Examination and Treatment
Route::get('/display-add-form','ExaminationTreatmentController@addExaminationTreatmentForm')->name('E & T Form');
Route::get('/edit-examine-treatment-form/{id}','ExaminationTreatmentController@editExaminationTreatment')->name('E & T Edit Form');
Route::post('/save-examine-treatment','ExaminationTreatmentController@createExaminationTreatment');
Route::get('/display-examine-treatment','ExaminationTreatmentController@displayExaminationTreatment')->name('E & T Table');
Route::get('/search-examine-treatment','ExaminationTreatmentController@searchExaminationTreatment')->name('E & T Search');
Route::post('/update-examine-treatment/{id}','ExaminationTreatmentController@updateExaminationTreatmentInformation');
Route::get('/delete-examine-treatment/{id}','ExaminationTreatmentController@deleteExaminationTreatment');
//Feed
Route::get('/show-add-feed-form','FeedController@addFeedForm')->name('Feeds Form');
Route::get('/edit-feed-form/{id}','FeedController@editFeedForm')->name('Edit Feeds Form');
Route::post('/save-feed','FeedController@createFeed');
Route::get('/display-feed','FeedController@displayFeed')->name('Feeds Table');
Route::get('/search-feed','FeedController@searchFeed')->name('Searched Feeds');
Route::post('/update-feed/{id}','FeedController@updateFeedInformation');
Route::get('/delete-feed/{id}','FeedController@deleteFeed');
//Item
Route::get('/display-sell-item-form','ItemController@sellItemForm')->name('Sell Item Form');
Route::get('/edit-sell-item-form/{id}','ItemController@editSellAnimalForm')->name('Edit Item');
Route::post('/save-item-on-sell','ItemController@createSellItem');
Route::get('/display-items-on-sell','ItemController@displaySellItems')->name('Item Details');
Route::get('/search-items','ItemController@searchitemItems')->name('Searched Item');
Route::post('/update-items-on-sell/{id}','ItemController@updateSellItems');
Route::get('/delete-item/{id}','ItemController@deleteitemItems');
Route::get('/display-doctors-form','ItemController@DoctorsRequestForm')->name('Request Doctor');
Route::get('/edit-doctor-req-form/{id}','ItemController@editDoctorsForm')->name('Edit Doctor Request');
Route::post('/save-doctor-request','ItemController@createDoctorsRequest');
Route::get('/display-doctor-req','ItemController@displayDoctorsRequests')->name('Doctors Request');
Route::get('/search-doctor-req','ItemController@searchDoctorsRequest')->name('Searched Doctor');
Route::post('/save-request/{id}','ItemController@updateDoctorsRequests');
Route::get('/delete-doctors-req/{id}','ItemController@deleteDoctorsRequest');
Route::get('/view-conscent/{id}','ItemController@displayConscent')->name('Conscent Paper');
Route::get('/view-conscent-form/{id}','ItemController@displayConscentForm')->name('Conscent Form');
Route::post('/save-conscent','ItemController@createConscent');
//Months
Route::get('/show-add-month-form','MonthController@addMonthForm')->name('Add Month Form');
Route::get('/edit-month-form/{id}','MonthController@editMonthForm')->name('Edit Month Form');
Route::post('/save-month','MonthController@createMonth');
Route::get('/display-months','MonthController@displayMonth')->name('Month Table');
Route::get('/search-month','MonthController@searchMonth')->name('Searched Month');
Route::post('/update-months/{id}','MonthController@updateMonthInformation');
Route::get('/delete-month/{id}','MonthController@deleteMonth');
//Days
Route::get('/show-add-day-form','DaysController@addDayForm')->name('Add Day Form');
Route::get('/edit-day-form/{id}','DaysController@editDayForm')->name('Edit Day Form');
Route::post('/save-day','DaysController@createDay');
Route::get('/display-days','DaysController@displayDay')->name('Day Table');
Route::get('/search-day','DaysController@searchDay')->name('Searched Day');
Route::post('/update-day/{id}','DaysController@updateDayInformation');
Route::get('/delete-day/{id}','DaysController@deleteDay');
//role
Route::get('/save-role-details','RoleController@createRoles');
Route::get('/search-role','RoleController@searchRoles');
Route::get('/role-form','RoleController@addRoleForm')->name('Add Role');
Route::get('/roles','RoleController@getAllRoles')->name('User Accounts');
//permission
Route::post('/assign-permissions/{id}','PermissionController@assign_roles');
Route::post('/unsign-permission/{id}','PermissionController@unsignPermission');
Route::get('/assign-roles','PermissionController@assign_roles');
Route::get('/assign-or-remove-permissions/{id}','PermissionController@getAllPermissionsForARole')->name('Permissions');
Route::get('/checkbox_permissions/{id}','PermissionController@pickAllPermissionsCheckBox')->name('Checkboxes Permissions');
//user
Route::get('/all_users','UserController@getAllRegisteredUsers')->name('All Users');
Route::get('/search-user','UserController@searchUser')->name('Searched User');
Route::post('/register-user','UserController@registerUsers')->name('Register User Form');
Route::get('/capture-user','UserController@addUserForm')->name('Add User Form');
Route::get('/edit-user/{id}','UserController@editUsersForm')->name('edit User Form');
Route::post('/update-user/{id}','UserController@updateUserInformation');
Route::get('/delete-user/{id}','UserController@SuspendUserInformation');
//Price
Route::get('/display-add-price-form','PriceController@addPriceForm')->name('Update prices');
Route::get('/edit-price-form/{id}','PriceController@editPriceForm')->name('Edit Prices');
Route::post('/save-price','PriceController@createPrice');
Route::get('/display-prices','PriceController@displayPrice')->name('Current Market Prices');
Route::get('/search-price','PriceController@searchPrice')->name('Prices Prices');
Route::post('/update-price/{id}','PriceController@updatePriceInformation');
Route::get('/delet-price/{id}','PriceController@deletePrice');
//Product
Route::get('/display-product-form','ProductController@addProductForm')->name('Add Product Form');
Route::get('/edit-product-form/{id}','ProductController@editProductForm')->name('Edit Product');
Route::post('/save-product','ProductController@createProduct');
Route::get('/display-product','ProductController@displayProduct')->name('Products Table');
Route::get('/search-product','ProductController@searchProduct')->name('Searched Product');
Route::post('/update-product/{id}','ProductController@updateProductInformation');
Route::get('/delete-product/{id}','ProductController@deleteProduct');
//Profile
Route::get('/display-profile-form','ProfileController@addProfileForm')->name('Add Profile Form');
Route::post('/save-profile','ProfileController@createProfile');
Route::get('/display-profile','ProfileController@displayProfile')->name('Profile Table');
Route::get('/search-profile','ProfileController@searchProfile')->name('Searched Profile');
Route::post('/update-profile/{id}','ProfileController@updateProfileInformation');
Route::get('/delete-profile/{id}','ProfileController@deleteProfile');
Route::post('/change-profile','ProfileController@createEditedPicture');
Route::get('/change-profile-form','ProfileController@showChangeProfileForm')->name('Change Profile');
//Emergency
Route::get('/display-emergency-reports','EmergencyController@displayEmergency')->name('Emergency Table');
Route::get('/display-emergency-form','EmergencyController@addEmergency')->name('Emergency Form');
Route::get('/display-emergency-edit-form/{id}','EmergencyController@editEmergencyForm')->name('edit Emergency Form');
Route::post('/save-emergency','EmergencyController@createEmergency');
Route::post('/update-emergency/{id}','EmergencyController@updateEmergency');
Route::get('/delete-emergency/{id}','EmergencyController@deleteEmergency');
// Permit
Route::get('/display-permit','PermitController@displayPermit')->name('Permit Details')->name('Permit Details');
Route::get('/invoice-print','PermitController@PrintForm')->name('Print Invoice');
Route::get('/display-permit-form','PermitController@addPermitForm')->name('Permit Form');
Route::post('/save-print-information','PermitController@createPermit');
//Village
Route::get('/display-add-village-form','Village@addVillageForm')->name('Add Village');
Route::get('/display-edit-form/{id}','Village@editVillageForm')->name('Edit Village Form');
Route::get('/display-village','Village@displayVillage')->name('Villages');
Route::post('/save-village','Village@createVillage');
Route::get('/search-village','Village@searchVillage')->name('Searched Village');
Route::post('/Update-village/{id}','Village@updateVillageInformation');
Route::get('/delete-village/{id}','Village@deleteVillage');
//Week
Route::get('/display-week-form','WeekController@addWeekForm')->name('Add Week Form');
Route::get('/edit-week-form/{id}','WeekController@editWeekForm')->name('Edit Week Form');
Route::post('/save-week','WeekController@createWeek');
Route::get('/display-all-weeks','WeekController@displayWeek')->name('Weeks Table');
Route::get('/search-week','WeekController@searchWeek')->name('Searched Week');
Route::post('/update-week/{id}','WeekController@updateWeekInformation');
Route::get('/delete-week/{id}','WeekController@deleteWeek');
//Weight
Route::get('/display-add-weight-form','WeightController@addWeightForm')->name('Weight Form');
Route::get('/edit-weight-form/{id}','WeightController@editWeightForm')->name('Edit weight Form');
Route::post('/create-weight','WeightController@createWeight');
Route::get('/display-weight','WeightController@displayWeight')->name('Weight Table');
Route::get('/search-weight','WeightController@searchWeight')->name('searched Weight');
Route::post('/update-weight/{id}','WeightController@updateWeightInformation');
Route::get('/delete-weight/{id}','WeightController@deleteWeight');
//Districts
Route::get('/display-district-form','DistrictController@addDistrictForm')->name('Add District');
Route::get('/display-edit-district/{id}','DistrictController@editDistrictForm')->name('Edit District');
Route::get('/display-districts','DistrictController@displayDistrict')->name('District Table');
Route::post('/save-district','DistrictController@createDistrict');
Route::get('/search-district','DistrictController@searchDistrict')->name('Searched District');
Route::post('/update-district/{id}','DistrictController@updateDistrictInformation');
Route::get('/delete-district/{id}','DistrictController@deleteDistrict');
//County
Route::get('/display-county-form','CountyController@addCountyForm')->name('Add County Form');
Route::get('/edit-county-form/{id}','CountyController@editCountyForm')->name('edit County Form');
Route::post('/save-county','CountyController@createCounty');
Route::get('/display-county','CountyController@displayCounty')->name('County Table');
Route::get('/serch-county','CountyController@searchCounty');
Route::post('/update-county/{id}','CountyController@updateCountyInformation');
Route::get('/delete-county/{id}','CountyController@deleteCounty');
//Village
Route::get('/display-village-form','VillageController@addVillageForm')->name('Add Sub county');
Route::get('/edit-village-form/{id}','VillageController@editVillageForm')->name('Edit Sub county');
Route::post('/save-village','VillageController@createVillage');
Route::get('/display-sub-counties','VillageController@displayVillage')->name('Subcounty Table');
Route::get('/search-village','VillageController@searchVillage')->name('Subcounty Searched');
Route::post('/update-village/{id}','VillageController@updateVillageInformation');
Route::get('/delete-village/{id}','VillageController@deleteVillage');
//Year
Route::get('/display-add-year','YearController@addWeightForm');
Route::get('/display-edit-year/{id}','YearController@editWeightForm');
Route::post('/save-year','YearController@createWeight');
Route::get('/display-year','YearController@displayWeight');
Route::get('/search-year','YearController@searchWeight');
Route::post('/update-year/{id}','YearController@updateWeightInformation');
Route::get('/delete-year/{id}','YearController@deleteWeight');

//Change Password
Route::get('/change-passwords',"UserController@displayChangePasswordForm")->name('Change Password');
Route::get('/save-change-password','UserController@store_users_password');
});
Route::get('/', 'FrontPageController@showFrontPages');
Route::get('/about', 'AboutController@displayAbout');
Route::get('/contact', 'ContactController@displayContact');
Route::get('/blog', 'BlogController@displayBlog');
Route::get('/project', 'ProjectController@displayProject');
Route::get('/services', 'ServicesController@displayServices');
//Blog Details
Route::get('/display-blog-form','BlogDetailsController@addBlogDetailsForm')->name('Blog Details Form');
Route::post('/save-blog-details','BlogDetailsController@createBlogDetail');
Route::get('/display-blog-detail','BlogDetailsController@displayBlogDetail')->name('Blog Details Table');
Route::get('/display-edit-blog/{id}','BlogDetailsController@editBlogDetailForm')->name('Edit Blog Details Form');
Route::post('/update-blog-detail/{id}','BlogDetailsController@updateBlogDetails');
Route::get('/delete-blog/{id}','BlogDetailsController@deleteBlogDetail');
//Comments
Route::post('/save-comment','CommentController@createComment');
Route::get('/display-comments-for approval','CommentController@displayComments')->name('UnApproved Comments');
Route::get('/display-approve-comment/{id}','CommentController@approveComment');
Route::get('/delete-comment/{id}','CommentController@deleteComment');
//Contact or Messages
Route::post('/save-message','ContactController@createMessage');
Route::get('/display-messages','ContactController@displayMessages')->name('Messages Table');
Route::get('/delete-message/{id}','ContactController@deleteMessages');
//Faq
Route::post('/save-faq-questions','FaqController@createFaqQuestion');
Route::get('/display-question-form','FaqController@faqForm')->name('Add FAQ Questions');
Route::get('/display-faq-questions','FaqController@displayFaqQuestion')->name('Questions Table');
Route::get('/display-edit-question/{id}','FaqController@editFaqQuestion')->name('Edit Questions Form');
Route::post('/update-faq-questions/{id}','FaqController@updateFaqQuestions');
Route::get('/delete-question/{id}','FaqController@deleteQuestion');
//Farmers
Route::get('/display-farmers-form','FarmerController@farmerForm')->name('Add Farmers Form');
Route::post('/save-farmer','FarmerController@createFarmer');
Route::get('/display-farmers','FarmerController@displayFarmer')->name('Farmers Table');
Route::get('/display-edit-farmers/{id}','FarmerController@editFarmerForm')->name('Edit Farmers Form');
Route::post('/update-farmer/{id}','FarmerController@updateFarmerDetail');
Route::get('/delete-farmers/{id}','FarmerController@deleteFarmer');
//Features
Route::get('/display-feature-form','FeaturesController@featureForm')->name('Feature Form');
Route::post('/save-feature','FeaturesController@createFeature');
Route::get('/display-feature','FeaturesController@displayFeature')->name('Feature Table');
Route::get('/display-edit-feature/{id}','FeaturesController@editFeaturesForm')->name('Edit Feature Form');
Route::post('/update-feature/{id}','FeaturesController@updateFeature');
Route::get('/delete-feature/{id}','FeaturesController@deleteFeature');
//Feedback
Route::post('/save-feedback','FeedbackController@createFeedback');
Route::get('/display-feedback','FeedbackController@displayFeedback')->name('Unapproved Feedback');
Route::get('/display-approve-feedback/{id}','FeedbackController@approveFeedback');
Route::get('/delete-feedback/{id}}','FeedbackController@deleteFeedback');
Route::get('/front-page-feedback','FeedbackController@displayFrontFeedbackPage');
//Gallery
Route::get('/display-gallery-form','GalleryController@galleryForm')->name('Gallery Form');
Route::post('/save-gallery','GalleryController@createGallery');
Route::get('/display-gallery','GalleryController@displayGallery')->name('Gallery Table');
Route::get('/display-edit-gallery/{id}','GalleryController@editGallery')->name('Gallery Form');
Route::post('/update-gallery/{id}','GalleryController@updateGallery');
Route::get('/delete-gallery/{id}','GalleryController@deleteGallery');
//Market Products
Route::get('/display-market-products-form','MarketController@marketProductsForm')->name('Market Product Form');
Route::post('/save-market-product','MarketController@createProductsForMarket');
Route::get('/display-market-product','MarketController@displayProductsForMarket')->name('Market Product Table');
Route::get('/display-edit-market-products/{id}','MarketController@editMarket')->name('Edit Market Product Form');
Route::post('/update-market-product/{id}','MarketController@updateMarket');
Route::get('/delete-market-products','MarketController@deleteMarket');
//News
Route::get('/display-news-form','NewsController@newsForm')->name('News Form');
Route::post('/save-news','NewsController@createNews');
Route::get('/display-news','NewsController@displayNews')->name('News Table');
Route::get('/display-edit-news/{id}','NewsController@editNews')->name('edit News Form');
Route::post('/update-news/{id}','NewsController@updateNews');
Route::get('/delete-news/{id}','NewsController@deleteNews');
//Others
Route::get('/display-others-form','OthersController@otherForm')->name('Others Form');
Route::post('/save-others','OthersController@createOthers');
Route::get('/display-others','OthersController@displayOthers')->name('Others Table');
Route::get('/display-edit-others/{id}','OthersController@editOthers')->name('edit Others Form');
Route::post('/update-others/{id}','OthersController@updateOthers');
Route::get('/delete-others/{id}','OthersController@deleteOthers');
//Project Gallery
Route::get('/display-project-gallery-form','ProjectGalleryController@projectGalleryForm')->name('Project Gallery Form');
Route::post('/save-project-gallery','ProjectGalleryController@createProjectGallery');
Route::get('/display-project-gallery','ProjectGalleryController@displayProjectGallery')->name('Project Gallery Table');
Route::get('/display-edit-project-gallery/{id}','ProjectGalleryController@editProjectGalleryForm')->name('edit Gallery Form');
Route::post('/save-project-galleri/{id}','ProjectGalleryController@updateProjectGallery');
Route::get('/delete-project-gallery/{id}','ProjectGalleryController@deleteProjectGallery');
//Recent News
Route::get('/display-recent-news-form','RecentNewsController@RecentNewsForm')->name('Recent News Form');
Route::post('/save-recent-news','RecentNewsController@createRecentNews');
Route::get('/display-recent-news','RecentNewsController@displayRecentNews')->name('Recent News Table');
Route::get('/display-edit-recent-news/{id}','RecentNewsController@editRecentNews')->name('edit Recent News');
Route::post('/update-recent-news/{id}','RecentNewsController@updateRecentNews');
Route::get('/delete-recent-news/{id}','RecentNewsController@deleteRecentNews');
//Reply
Route::get('/save-reply','ReplyController@createReply');
Route::get('/display-reply','ReplyController@displayReply')->name('Reply Table');
Route::get('/delete-reply/{id}','ReplyController@deleteReply');
//Services
Route::get('/display-service-form','ServicesController@featureServiceForm')->name('Feature Service Form');
Route::get('/display-feature_service','ServicesController@displayFeatureService')->name('Feature Services Table');
Route::get('/display-service-we-do-form','ServicesController@weDoServiceForm')->name('Services We Do Form');
Route::post('/save-feature-service','ServicesController@createFeatureService');
Route::get('/display-edit-service/{id}','ServicesController@editFeatureForm')->name('edit Feature service Form');
Route::post('/update-feature_service/{id}','ServicesController@updateServiceFeature');
Route::get('/delete-service/{id}','ServicesController@deleteServiceFeature');

Route::get('/display-service-we-do','ServicesController@displayWedoService')->name('Service We Do Table');
Route::post('/save-we-do-service','ServicesController@createWedoService');
Route::get('/display-edit-service-we-do/{id}','ServicesController@editServiceForm')->name('edit Service We Do Form');
Route::post('/update-service-we-do/{id}','ServicesController@updateService');
Route::get('/delete-service-we-do/{id}','ServicesController@deleteService');
//Sponsor
Route::get('/display-sponsor-form','SponsorController@SponsorForm')->name('Add Sponsor Table');
Route::post('/save-sponsor','SponsorController@createSponsor');
Route::get('/display-sponsor','SponsorController@displaySponsor')->name('Sponsor Table');
Route::get('/display-edit-sponsor/{id}','SponsorController@editSponsor')->name('edit Sponsor Form');
Route::post('/update-sponsor/{id}','SponsorController@updateSponsor');
Route::get('/delete-sponsor/{id}','SponsorController@deleteSponsor');
//Subscription
Route::post('/save-subscription','SubscriptionController@createSubscription');
Route::get('/display-subscription','SubscriptionController@displaySubscription')->name('Subscription Table');
Route::get('/delete-subscription/{id}','SubscriptionController@deleteSubscription');
//Farm
Route::get('/farm','FarmController@displayFrontFarms');
Route::get('/display-farm-form','FarmController@addFarmForm')->name('Farm Form');
Route::post('/save-farm','FarmController@createFarm');
Route::get('/display-farm','FarmController@displayFarm')->name('Farm Table');
Route::get('/edit-farm/{id}','FarmController@editFarm')->name('Edit Farm Form');
Route::post('/update-farm/{id}','FarmController@updateFarm');
Route::get('/delete-farm/{id}','FarmController@deleteFarm');


//Route::get('/front','HomeController@showFeature');
Auth::routes();
