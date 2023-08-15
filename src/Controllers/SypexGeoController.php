<?php

namespace Pavelutkin\Location\Controllers;
use Eseath\SxGeo\SxGeo;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class SypexGeoController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'ip' => 'string|required',
        ]);
        $sxGeo = new SxGeo(__DIR__ . '../database/SxGeoCity.dat');
        $fullInfo  = $sxGeo->getCityFull($validated['ip']);
        return Response::json($fullInfo);
    }
}
