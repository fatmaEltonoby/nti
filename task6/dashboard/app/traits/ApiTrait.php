<?php
namespace App\traits;



trait ApiTrait{    
    public static function successMessage( string $message="" , int $statusCode = 200){
      return response()->json([
        'success'=>true ,
         'message'=>$message ,
         'data'=>(object)[],
         'erroes'=>(object)[]
        ] ,$statusCode);
    }

    public static function errorMessage(array $errors ,string $message="" , int $statusCode = 422){
      return response()->json([
        'success'=>false ,
         'message'=>$message ,
         'data'=>(object)[],
         'erroes'=>(object)$errors
        ] ,$statusCode);
    }

    public static function data(array $data ,string $message="" , int $statusCode = 422){
      return response()->json([
        'success'=>false ,
         'message'=>$message ,
         'data'=>(object)$data,
         'erroes'=>(object)[]
        ] ,$statusCode);
    }

}