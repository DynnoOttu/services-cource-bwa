<?php

use Illuminate\Support\Facades\Http;

function getUser($userId)
{
    $url = env('SERVICE_USER_URL') . 'users/' . $userId;

    try {
        $response = Http::timeout(10)->get($url);
        $data = $response->json();
        $data['http_code'] = $response->getStatusCode();
        return $data;
    } catch (\Throwable $th) {
        return [
            'status' => 'error',
            'http_code' => 500,
            'message' => 'service user unavailable'
        ];
    }
}

function getUserById($userId = [])
{
    $url = env('SERVICE_USER_URL') . 'users/';
    try {
        if (count($userId) === 0) {
            return [
                'status' => 'success',
                'http_code' => 200,
                'data' => []
            ];
        }

        $response = Http::timeout(10)->get($url, [
            'user_id' => $userId
        ]);
        $data = $response->json();
        $data['http_code'] = $response->getStatusCode();
        return $data;
    } catch (\Throwable $th) {
        return [
            'status' => 'error',
            'http_code' => 500,
            'message' => 'service user unavailable'
        ];
    }
}
