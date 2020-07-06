<?php
namespace App\Traits;
use Illuminate\Http\Response;

trait ApiResponser
{
    /**
     * BUILD SUCCESS RESPONSE
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code=Response::HTTP_OK)
    {
        return response()->json(['data'=>$data],$code);
        //return response($data,$code)->header('Content-Type', 'application/json');
    }
    /**
     * BUILD ERROR RESPONSE
     * @param string|array $message
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code)
    {
        return response()->json(['error'=>$message,'code'=>$code],$code);
    }
    /**
     * BUILD ERROR RESPONSE
     * @param string|array $message
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorMessage($message, $code)
    {
        return response($message,$code)->header('Content-Type', 'application/json');
    }
}
