<?php

use Illuminate\Http\Request;

function handle(Request $request, callable $callback)
{
    echo "All bad for {$request->getClientIp()}\n";

    $callback(false);
}