<?php

namespace App\Services;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Facebook;
use GuzzleHttp\Client;

class FacebookService
{
    protected $client;
    protected $pageAccessToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->pageAccessToken = env('FACEBOOK_PAGE_ACCESS_TOKEN');
    }

    public function postToPage($message)
    {
        $url = 'https://graph.facebook.com/v20.0/296237116905359/feed';
        $response = $this->client->post($url, [
            'form_params' => [
                'message' => $message,
                'access_token' => $this->pageAccessToken,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}