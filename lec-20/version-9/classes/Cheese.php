<?php

class Cheese
{

  public $name;
  public $classification;
  public $description;
  public $photoId;

  public function __construct()
  {
    // $this->name = $name;
    // $this->classification = $classification;
    // $this->description = $description;
    // $this->photoId = $photoId;
  }


  public function name()
  {
    return ucwords($this->name);
  }

  public function cloudinaryUrl($size)
  {
    $id = $this->photoId;
    return "https://res.cloudinary.com/blunxy/image/upload/w_$size,h_$size,c_fill,r_max/v1638743067/3512.202104.final.exam/$id.jpg";
  }
}
