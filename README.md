## Criação de api com laravel

 - Modulos: `Product`, `Vehicle`, `Job` e `Company`

 - EndPoints

 ```
 +--------+-----------+-----------------------+-----------------+------------------------------------------------+--------------+
| Domain | Method    | URI                   | Name            | Action                                         | Middleware   |
+--------+-----------+-----------------------+-----------------+------------------------------------------------+--------------+
|        | POST      | api/company           | company.store   | App\Http\Controllers\CompanyController@store   | api          |
|        | GET|HEAD  | api/company           | company.index   | App\Http\Controllers\CompanyController@index   | api          |
|        | PUT|PATCH | api/company/{company} | company.update  | App\Http\Controllers\CompanyController@update  | api          |
|        | DELETE    | api/company/{company} | company.destroy | App\Http\Controllers\CompanyController@destroy | api          |
|        | GET|HEAD  | api/company/{company} | company.show    | App\Http\Controllers\CompanyController@show    | api          |
|        | GET|HEAD  | api/job               | job.index       | App\Http\Controllers\JobController@index       | api          |
|        | POST      | api/job               | job.store       | App\Http\Controllers\JobController@store       | api          |
|        | DELETE    | api/job/{job}         | job.destroy     | App\Http\Controllers\JobController@destroy     | api          |
|        | GET|HEAD  | api/job/{job}         | job.show        | App\Http\Controllers\JobController@show        | api          |
|        | PUT|PATCH | api/job/{job}         | job.update      | App\Http\Controllers\JobController@update      | api          |
|        | POST      | api/product           | product.store   | App\Http\Controllers\ProductController@store   | api          |
|        | GET|HEAD  | api/product           | product.index   | App\Http\Controllers\ProductController@index   | api          |
|        | GET|HEAD  | api/product/{product} | product.show    | App\Http\Controllers\ProductController@show    | api          |
|        | PUT|PATCH | api/product/{product} | product.update  | App\Http\Controllers\ProductController@update  | api          |
|        | DELETE    | api/product/{product} | product.destroy | App\Http\Controllers\ProductController@destroy | api          |
|        | POST      | api/vehicle           | vehicle.store   | App\Http\Controllers\VehicleController@store   | api          |
|        | GET|HEAD  | api/vehicle           | vehicle.index   | App\Http\Controllers\VehicleController@index   | api          |
|        | PUT|PATCH | api/vehicle/{vehicle} | vehicle.update  | App\Http\Controllers\VehicleController@update  | api          |
|        | GET|HEAD  | api/vehicle/{vehicle} | vehicle.show    | App\Http\Controllers\VehicleController@show    | api          |
|        | DELETE    | api/vehicle/{vehicle} | vehicle.destroy | App\Http\Controllers\VehicleController@destroy | api          |
+--------+-----------+-----------------------+-----------------+------------------------------------------------+--------------+
```
