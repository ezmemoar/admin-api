<?php

namespace App\Helper;

class ImageHelper
{
  public function createImageUrl($path, $filename)
  {
    return "{$path}{$filename}";
  }
}
