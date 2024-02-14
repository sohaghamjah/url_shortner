<?php
namespace App\Http\Helpers;

class JsonResponse{
    public static function success($message = null, $data = [])
    {
        return response()->json(['message' => $message, 'data' => $data], 200);
    }
    public static function onlySuccess($message = null)
    {
        return response()->json(['message' => $message], 200);
    }
    public static function error($message = 'Something Went Wrong', $data = [])
    {
        return response()->json(['message' => $message, 'data' => $data], 400);
    }
    public static function onlyError($message = 'Something Went Wrong')
    {
        return response()->json(['message' => $message], 400);
    }
    public static function warning($message, $data = null) {
        return response()->json(['message' => $message, 'data' => $data], 400);
    }
    public static function onlyWarning($message) {
        return response()->json(['message' => $message], 400);
    }
}
