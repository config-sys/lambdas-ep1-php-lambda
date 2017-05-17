<?php

use Illuminate\Http\Request;

function handle(Request $request, callable $callback)
{
    echo "All good for {$request->getClientIp()}\n";

    $callback(true);
}