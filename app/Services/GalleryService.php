<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Database\Eloquent\Collection;

class GalleryService
{
  public function getAll(): Collection
  {
    return Gallery::all();
  }

  public function update(Gallery $data)
  {
    return Gallery::updateOrCreate(
      [
        "id" => $data->id,
      ],
      $data
    );
  }
}
