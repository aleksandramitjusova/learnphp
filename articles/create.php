<?php

use App\Controllers\ArticlesController;
use App\Controllers\PublicController;
use App\Router;

@@ -9,3 +10,8 @@

Router::get('/forms', [PublicController::class, 'forms']);
Router::post('/forms', [PublicController::class, 'answer']);


Router::get('/admin/articles', [ArticlesController::class, 'index']);
Router::get('/admin/articles/create', [ArticlesController::class, 'create']);
Router::post('/admin/articles', [ArticlesController::class, 'store']);