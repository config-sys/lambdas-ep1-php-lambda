<?php

use Illuminate\Http\Request;

Route::get('/lambdas/{id}', function ($id, Request $request) {
    $path = resource_path("lambdas/{$id}.php");
    if (! file_exists($path)) return response('Not found', 404);

    require($path);

    handle($request, function($result) {
        echo $result ? "Success\n" : "Failure\n";
    });
});