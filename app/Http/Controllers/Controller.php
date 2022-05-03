<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * throwUnauthenticated
     */
    public function throwUnauthenticated()
    {
        return response()->json([
            "statusCode" => 5000,
            "statusType" => "UNAUTHENTICATED"
        ], 401);
    }
    /**
     * throwUnauthorized
     */
    public function throwUnauthorized()
    {
        return response()->json([
            "statusCode" => 5001,
            "statusType" => "UNAUTHORIZED"
        ], 403);
    }
    /**
     * throwUserAlreadyExists
     */
    public function throwUserAlreadyExists()
    {
        return response()->json([
            "statusCode" => 5002,
            "statusType" => "USER_ALREADY_EXISTS"
        ], 422);
    }
    /**
     * throwUserDoesNotExist
     */
    public function throwUserDoesNotExist()
    {
        return response()->json([
            "statusCode" => 5003,
            "statusType" => "USER_DOES_NOT_EXISTS"
        ], 404);
    }
    /**
     * throwWrongCredentials
     */
    public function throwWrongCredentials()
    {
        return response()->json([
            "statusCode" => 5004,
            "statusType" => "WRONG_CREDENTIALS"
        ], 422);
    }
    /**
     * throwMaximumTokenReached
     */
    public function throwMaximumTokenReached()
    {
        return response()->json([
            "statusCode" => 5005,
            "statusType" => "MAXIMUM_TOKEN_REACHED"
        ], 422);
    }
    /**
     * throwInvalidInput
     */
    public function throwInvalidInput($message)
    {
        return response()->json([
            "statusCode" => 5006,
            "statusType" => "INVALID_INPUT",
            "msg" => $message
        ], 422);
    }

    /**
     * throwPaymentRequired
     */
    public function throwPaymentRequired()
    {
        return response()->json([
            "statusCode" => 5007,
            "statusType" => "PAYMENT_REQUIRED"
        ], 402);
    }
    /**
     * throwPayloadTooLarge
     */
    public function throwPayloadTooLarge()
    {
        return response()->json([
            "statusCode" => 5008,
            "statusType" => "TOO_LARGE"
        ], 413);
    }
    /**
     * throwRateLimitExceed
     */
    public function throwRateLimitExceed()
    {
        return response()->json([
            "statusCode" => 5009,
            "statusType" => "TOO_MANY_REQUEST"
        ], 429);
    }
    /**
     * throwServerError
     */
    public function throwServerError()
    {
        return response()->json([
            "statusCode" => 5010,
            "statusType" => "INTERNAL_SERVER_ERROR"
        ], 500);
    }
    /**
     * throwUnderMaintainence
     */
    public function throwUnderMaintainence()
    {
        return response()->json([
            "statusCode" => 5011,
            "statusType" => "UNDER_MAINTAINENCE"
        ], 503);
    }
    /**
     * throwServerTimeout
     */
    public function throwServerTimeout()
    {
        return response()->json([
            "statusCode" => 5012,
            "statusType" => "SERVER_TIMEOUT"
        ], 504);
    }
}
