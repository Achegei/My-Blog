<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
  public function getSpace()
  {
    return view('space');
  }
  public function getContactus()
  {
    $firstName = 'Laban';
    $lastName = 'Ekitela';

    $fullName = $firstName . ' ' . $lastName;
    $email = 'ekitelah@gmail.com';
    $data = [];
    $data['email'] = $email;
    $data['fullName'] = $fullName;

    return view('contactus')->withData($data);
  }

  public function getAbout()

  {
    return view('about');
  }

  public function getWelcome()
  {
    return view('welcome');
  }
}
