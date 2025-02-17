<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceProvider;


class ServiceProviderController extends Controller
{
    public function index(){
        return response()->json(ServiceProvider::all());
    }
}
