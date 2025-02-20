<?php

namespace App;

trait ErrorTrait
{
    public function ErrorTrait($msg, $statusCode)
    {
        return response()->json(
            ["error" => $msg],
            $statusCode
        );
    }
}
