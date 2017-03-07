<?php

class FileUpload
{

  protected $path;

  public function save($callback)
  {
    // Codi per guardar un fitxer
    $this->path = '/temp/fitxer';

    $callback($this->path);
  }
}

class Profile
{

  public function updateProfile()
  {
    # code...
    $f = new FileUpload();

    $f->save(function ($path) {
      echo "El fitxer s'ha guardat correctament! " . $path;
    });
  }
}

$profile = new Profile();
$profile->updateProfile();
