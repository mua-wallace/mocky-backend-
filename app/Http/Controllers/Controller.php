<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

 /**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Mocky-ecommerce site",
 *      description="This is the mocky-ecommerce websitethat deals with two main products electronics and home accessories",
 *      @OA\Contact(
 *          email="muawallizewi@gmail.com"
 *      ),
 * )
 */

/**
 *  @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="Mocky-ecommerce OpenApi dynamic host server"
 *  )
 */

/**
 * @OA\SecurityScheme(
 *     type="oauth2",
 *     description="Use a global client_id / client_secret and your username / password combo to obtain a token",
 *     name="Password Based",
 *     in="header",
 *     scheme="https",
 *     securityScheme="Password Based",
 *     @OA\Flow(
 *         flow="password",
 *         authorizationUrl="/oauth/authorize",
 *         tokenUrl="/oauth/token",
 *         refreshUrl="/oauth/token/refresh",
 *         scopes={}
 *     )
 * )
 */

/**
 * @OA\OpenApi(
 *   security={
 *     {
 *       "oauth2": {"read:oauth2"},
 *     }
 *   }
 * )
 */

/**
 * @OA\Tag(
 *     name="Products",
 *     description="Everything about your Products",
 * )
 *
 * @OA\Tag(
 *     name="User",
 *     description="Operations about user",
 * )
 * @OA\ExternalDocumentation(
 *     description="Find out more about Swagger",
 *     url="http://swagger.io"
 * )
 */


// Get list of all products
/**
 * @OA\Get(
 *      path="/list",
 *      tags={"Products"},
 *      summary="Get list of products",
 *      description="Returns list of products",
 *      security={{"bearer_token":{}}},
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *       @OA\Response(response=400, description="Bad request"),
 *     )
 *
 * Returns list of products
 */


// Get product informatio
/**
 * @OA\Get(
 *      path="/product/{id}",
 *      tags={"Products"},
 *      summary="Get product information",
 *      description="Returns product data",
 *      security={{"bearer_token":{}}},
 *      @OA\Parameter(
 *          name="id",
 *          description="Product id",
 *          required=true,
 *          example="14",
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 * )
 */

//  Delete product
/**
 * @OA\Delete(
 *      path="/delete/{id}",
 *      tags={"Products"},
 *      summary="Delete product",
 *      description="Delete product",
 *      security={{"bearer_token":{}}},
 *      @OA\Parameter(
 *          name="id",
 *          description="Uniquue product id",
 *          required=true,
 *          example="17",
 *          in="path",
 *          @OA\Schema(
 *              type="integer"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 * )
 */



//  Search a particular product
/**
 * @OA\Get(
 *      path="/search/{key}",
 *      tags={"Products"},
 *      summary="Search a particular product",
 *      description="Search Product",
 *      security={{"bearer_token":{}}},
 *      @OA\Parameter(
 *          name="key",
 *          description="Search product using Key",
 *          required=true,
 *          example="Television",
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 *      @OA\Response(
 *          response=200,
 *          description="successful operation"
 *       ),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=404, description="Resource Not Found"),
 * )
 */





// add new product
/**
* @OA\Post(
* path="/addproduct",
*   tags={"Products"},
*   summary="Add product",
*   security={{"bearer_token":{}}},
* @OA\RequestBody(
*         required=true,
*         @OA\MediaType(
*             mediaType="multipart/form-data",
*             @OA\Schema(
*                 @OA\Property(
*                     description="file to image",
*                     property="image",
*                     type="file",
*                ),
*                @OA\Property(property="name", type="string", example="Smart Television"),
*                @OA\Property(property="category", type="string", example="electronics or home accessories"),
*                @OA\Property(property="description", type="string", example="This is Smart Tv of high quality"),
*                @OA\Property(property="quantity", type="integer", example="43"),
*                @OA\Property(property="price", type="number", example="150000"),
*                @OA\Property(property="delivery_date", type="string", example="6th January 2022"),
*                 required={"image","name", "category", "description", "quantity", "price", "delivery_date"}
*             )
*         ),
*         
*  ),
*   @OA\Response(
*      response=201,
*       description="Success",
*      @OA\MediaType(
*           mediaType="application/json",
*      )
*   ),
*   @OA\Response(
*      response=401,
*       description="Unauthenticated"
*   ),
*   @OA\Response(
*      response=400,
*      description="Bad Request"
*   ),
*   @OA\Response(
*      response=404,
*      description="not found"
*   ),
*      @OA\Response(
*          response=403,
*          description="Forbidden"
*      )
*)
*/

// Register new user
/**
* @OA\Post(
* path="/register",
* summary="Register new user endpoint",
* description="Register new user",
* tags={"User"},
* @OA\RequestBody(
*    required=true,
*    description="User Information",
*    @OA\JsonContent(
*       required={"name", "email", "location", "password"},
*       @OA\Property(property="name", type="string", example="mua wallice"),
*       @OA\Property(property="email", type="string", example="muawallice@gmail.com"),
*       @OA\Property(property="location", type="string", example="Douala"),
*       @OA\Property(property="password", type="string", example="1a2B239$q)_2022"), ),
* ),
* @OA\Response(
*    response=401,
*    description="An unknown error has occurred !!! Please try again later",
*    @OA\JsonContent(
*       @OA\Property(property="error", type="boolean", example="true"),
*       @OA\Property(property="status_code", type="string", example="401"),
*       @OA\Property(property="status", type="string", example="Unauthorized"),
*       @OA\Property(property="message", type="string", example="Protected page, please log in"),
*    )
* ),
* @OA\Response(
*    response=422,
*    description="An unknown error has occurred !!! Please try again later",
*    @OA\JsonContent(
*       @OA\Property(property="error", type="boolean", example="true"),
*       @OA\Property(property="status_code", type="string", example="422"),
*       @OA\Property(property="status", type="string", example="Unprocessable Entity"),
*       @OA\Property(property="message", type="string", example="An unknown error has occurred !!! Please try again later"),
*    )
* ),
* @OA\Response(
*    response=200,
*    description="User successfully register",
*    @OA\JsonContent(
*       @OA\Property(property="error", type="boolean", example="false"),
*       @OA\Property(property="status", type="string", example="success"),
*       @OA\Property(property="status_code", type="integer", example="200"),
*       @OA\Property(property="message", type="string", example="User successfully registered."),
*    )
* ),
* )
*/
//  login user
/**
* @OA\Post(
* path="/login",
* summary="login endpoint",
* description="Register new user",
* tags={"User"},
* @OA\RequestBody(
*    required=true,
*    description="login Information",
*    @OA\JsonContent(
*       required={"email", "password"},
*       @OA\Property(property="email", type="string", example="muawallice@gmail.com"),
*       @OA\Property(property="password", type="string", example="1a2B239$q)_2022"), ),
* ),
* @OA\Response(
*    response=401,
*    description="An unknown error has occurred !!! Please try again later",
*    @OA\JsonContent(
*       @OA\Property(property="error", type="boolean", example="true"),
*       @OA\Property(property="status_code", type="string", example="401"),
*       @OA\Property(property="status", type="string", example="Unauthorized"),
*       @OA\Property(property="message", type="string", example="Protected page, please log in"),
*    )
* ),
* @OA\Response(
*    response=422,
*    description="An unknown error has occurred !!! Please try again later",
*    @OA\JsonContent(
*       @OA\Property(property="error", type="boolean", example="true"),
*       @OA\Property(property="status_code", type="string", example="422"),
*       @OA\Property(property="status", type="string", example="Unprocessable Entity"),
*       @OA\Property(property="message", type="string", example="An unknown error has occurred !!! Please try again later"),
*    )
* ),
* @OA\Response(
*    response=200,
*    description="User successfully register",
*    @OA\JsonContent(
*       @OA\Property(property="error", type="boolean", example="false"),
*       @OA\Property(property="status", type="string", example="success"),
*       @OA\Property(property="status_code", type="integer", example="200"),
*       @OA\Property(property="message", type="string", example="User successfully registered."),
*    )
* ),
* )
*/
    
    

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
