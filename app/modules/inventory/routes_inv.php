<?php
/**
 * Created by PhpStorm.
 * User: etsb
 * Date: 3/29/16
 * Time: 1:59 PM
 */

/*........buyer..........*/

Route::any('buyer', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'buyer',
    'uses' => 'BuyerController@index'
]);

Route::any('store-buyer', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-buyer',
    'uses' => 'BuyerController@store'
]);

Route::any('view-buyer/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-buyer',
    'uses' => 'BuyerController@show'
]);

Route::any('edit-buyer/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-buyer',
    'uses' => 'BuyerController@edit'
]);

Route::any('update-buyer/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-buyer',
    'uses' => 'BuyerController@update'
]);

Route::any('delete-buyer/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-buyer',
    'uses' => 'BuyerController@delete'

]);


/*........yarn_count..........*/

Route::any('yarn-count', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'yarn-count',
    'uses' => 'YarnCountController@index'
]);

Route::any('store-yarn-count', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-yarn-count',
    'uses' => 'YarnCountController@store'
]);

Route::any('view-yarn-count/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-yarn-count',
    'uses' => 'YarnCountController@show'
]);

Route::any('edit-yarn-count/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-yarn-count',
    'uses' => 'YarnCountController@edit'
]);

Route::any('update-yarn-count/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-yarn-count',
    'uses' => 'YarnCountController@update'
]);

Route::any('delete-yarn-count/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-yarn-count',
    'uses' => 'YarnCountController@delete'

]);

/*........yarn_composition..........*/

Route::any('yarn-composition', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'yarn-composition',
    'uses' => 'YarnCompositionController@index'
]);

Route::any('store-yarn-composition', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-yarn-composition',
    'uses' => 'YarnCompositionController@store'
]);

Route::any('view-yarn-composition/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-yarn-composition',
    'uses' => 'YarnCompositionController@show'
]);

Route::any('edit-yarn-composition/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-yarn-composition',
    'uses' => 'YarnCompositionController@edit'
]);

Route::any('update-yarn-composition/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-yarn-composition',
    'uses' => 'YarnCompositionController@update'
]);

Route::any('delete-yarn-composition/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-yarn-composition',
    'uses' => 'YarnCompositionController@delete'

]);

/*........product_brand..........*/

Route::any('product-brand', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'product-brand',
    'uses' => 'ProductBrandController@index'
]);

Route::any('store-product-brand', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-product-brand',
    'uses' => 'ProductBrandController@store'
]);

Route::any('view-product-brand/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-product-brand',
    'uses' => 'ProductBrandController@show'
]);

Route::any('edit-product-brand/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-product-brand',
    'uses' => 'ProductBrandController@edit'
]);

Route::any('update-product-brand/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-product-brand',
    'uses' => 'ProductBrandController@update'
]);

Route::any('delete-product-brand/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-product-brand',
    'uses' => 'ProductBrandController@delete'

]);


/*........yarn-type..........*/

Route::any('yarn-type', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'yarn-type',
    'uses' => 'YarnTypeController@index'
]);

Route::any('store-yarn-type', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-yarn-type',
    'uses' => 'YarnTypeController@store'
]);

Route::any('view-yarn-type/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-yarn-type',
    'uses' => 'YarnTypeController@show'
]);

Route::any('edit-yarn-type/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-yarn-type',
    'uses' => 'YarnTypeController@edit'
]);

Route::any('update-yarn-type/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-yarn-type',
    'uses' => 'YarnTypeController@update'
]);

Route::any('delete-yarn-type/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-yarn-type',
    'uses' => 'YarnTypeController@delete'

]);


/*........yarn-color..........*/

Route::any('yarn-color', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'yarn-color',
    'uses' => 'YarnColorController@index'
]);

Route::any('store-yarn-color', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-yarn-color',
    'uses' => 'YarnColorController@store'
]);

Route::any('view-yarn-color/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-yarn-color',
    'uses' => 'YarnColorController@show'
]);

Route::any('edit-yarn-color/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-yarn-color',
    'uses' => 'YarnColorController@edit'
]);

Route::any('update-yarn-color/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-yarn-color',
    'uses' => 'YarnColorController@update'
]);

Route::any('delete-yarn-color/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-yarn-color',
    'uses' => 'YarnColorController@delete'

]);

/*........product_category..........*/

Route::any('product-category', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'product-category',
    'uses' => 'ProductCategoryController@index'
]);

Route::any('store-product-category', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'store-product-category',
    'uses' => 'ProductCategoryController@store'
]);

Route::any('view-product-category/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'view-product-category',
    'uses' => 'ProductCategoryController@show'
]);

Route::any('edit-product-category/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'edit-product-category',
    'uses' => 'ProductCategoryController@edit'
]);

Route::any('update-product-category/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'update-product-category',
    'uses' => 'ProductCategoryController@update'
]);

Route::any('delete-product-category/{id}', [
    //'middleware' => 'acl_access:user/add-user',
    'as' => 'delete-product-category',
    'uses' => 'ProductCategoryController@delete'

]);

