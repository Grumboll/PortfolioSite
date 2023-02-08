<?php

namespace App\Http\Controllers;

use App\Service\HomeService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $directory = public_path("screenshots");

        // Returns an array of files
        $screenshots = scandir($directory);
        // Unset first two elements since they are '.' and '..' respectively
        unset($screenshots[0]);
        unset($screenshots[1]);
        // Fix array keys incase they are needed
        $screenshots = array_values($screenshots);

        $randArr =  HomeService::getRandomNumbers(count($screenshots));
        $randScreenshots = HomeService::saveRandomScreenshots($screenshots, $randArr);
        $screenshots = HomeService::excludeRandomNumsFromScreenshotsArray($screenshots, $randArr);
        return view('home')
            ->with('randScreenshots', $randScreenshots)
            ->with('screenshots', $screenshots);
    }

    public function about()
    {
        return view('about');
    }
}
