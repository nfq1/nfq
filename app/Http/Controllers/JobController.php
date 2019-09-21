<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CrawlerService;

class JobController extends Controller
{
    protected $crawlerService;
    protected $baseUrl = 'https://jobs.github.com';

    public function __construct()
    {
        $this->crawlerService = app(CrawlerService::class);
    }

    public function index(Request $request)
    {
        $result = '';
        $url = $request->fullUrl();
        $query = isset(parse_url($url)['query']) ? parse_url($url)['query'] : '';
        if ($query) {
            $apiUrl = "{$this->baseUrl}/positions.json?{$query}";
            $result = $this->crawlerService->httpGet($apiUrl);
        }
        $jobs = json_decode($result);
        return view('jobs.index', ['jobs' => $jobs]);
    }
}
