<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Laravel API is running. Use /api endpoints.';
});

Route::get('/health', function () {
    return ['status' => 'ok', 'time' => date('Y-m-d H:i:s')];
});