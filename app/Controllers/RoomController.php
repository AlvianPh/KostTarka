<?php

namespace App\Controllers;

class RoomController extends BaseController
{
    public function index()
    {
        $data = [
            'images' => [
                '/img/1.jpg',
                '/img/2.jpg',
                '/img/3.jpg',
                '/img/4.jpg',
            ],
            'descriptions' => [
                'sadasdadsadsad',
                'dsaf',
                'fdvdf',
                'fdf',
                'sdf',
                'sad',
                'sadf',
            ]
        ];

        return view('room_detail', $data);
    }
}
