<?php

namespace App\Http\Controllers;

use App\Services\ApiService;

class ApiController extends Controller
{
    public $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index()
    {
        $data = $this->apiService->getData();
        if ($data === 'error'){
            return $data;
        }
        return view('restaurants', compact('data'));
    }
}
