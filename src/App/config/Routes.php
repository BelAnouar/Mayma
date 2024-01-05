<?php


declare(strict_types=1);


namespace App\Config;


use App\Controllers\ArtisteConrtoller;
use Framework\App;
use App\Controllers\ArtistsConrtoller;
use App\Controllers\YassineController;
use App\Controllers\AdminAr;
use App\Controllers\AdminCl;
use App\Controllers\AdminController;
use App\Controllers\AdminNot;

use App\Controllers\HomeController;

use App\Controllers\AuthController;
use App\Controllers\LoginController;
use App\Controllers\parolecontroller;
use App\Controllers\SalahController;
use App\Controllers\profilecontroller;
use App\Controllers\Reactioncontroller;
use App\Controllers\StylesController;
use App\Controllers\TestController;
use App\Controllers\IndexController;
use App\Controllers\LyricsController;

function registerRoutes(App $app)
{

    $app->get('/', [HomeController::class, 'home']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->get('/signup', [AuthController::class, 'index']);
    $app->post('/signup', [AuthController::class, 'post']);
    $app->get('/yassine', [YassineController::class, 'index']);
    $app->get('/salah', [SalahController::class, 'index']);
    $app->get('/profile', [profilecontroller::class, 'index']);
    $app->get('/register', [AuthController::class, 'index']);
    $app->post('/register', [AuthController::class, 'register']);
    $app->get('/admin', [AdminController::class, 'index']);
    $app->get('/admin-c', [AdminCl::class, 'index']);
    $app->get('/admin-a', [AdminAr::class, 'index']);
    $app->get('/adminNot', [AdminNot::class, 'index']);

    //Style Controllers
    $app->get('/admin-s', [StylesController::class, 'index']);

    $app->post('/admin-s', [StylesController::class, 'insertStyle']);




    $app->get('/admin-s/{transaction}', [StylesController::class, 'view']);

    $app->get("/test", [TestController::class, "index"]);
    $app->get('/test/{anouar}', [TestController::class, "aff"]);
    $app->post("/test", [TestController::class, "post"]);

    $app->post('/artiste', [ArtisteConrtoller::class, "addAlbum"]);
    $app->get('/artiste', [ArtisteConrtoller::class, "index"]);



    $app->get("/test", [TestController::class, "index"]);
    $app->get('/test/{anouar}', [TestController::class, "aff"]);
    $app->post("/test", [TestController::class, "post"]);
    $app->post("/client", [Reactioncontroller::class, "addlike"]);
    $app->post("/client", [Reactioncontroller::class, "adddislike"]);
    $app->get("/client", [parolecontroller::class, "addlyrics"]);
    $app->post("/client", [parolecontroller::class, "deletelyrics"]);
    $app->get('/parole', [LyricsController::class, "index"]);
    // yassine Route for index page (client)
    $app->get('/index', [HomeController::class, 'index']);
    $app->post('/parole', [LyricsController::class, 'addLyrics']);
}
