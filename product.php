<?php
class Product {
    // Properties
    private $name;
    private $price;
    private $image;
    private $category;
  
    // Constructor
    public function __construct($name, $price, $image, $category) {
      $this->name = $name;
      $this->price = $price;
      $this->image = $image;
      $this->category = $category;
    }
  
    // Methods
    public function getName() {
      return $this->name;
    }
  
    public function getPrice() {
      return $this->price;
    }
  
    public function getimage() {
      return $this->image;
    }
  
    public function getCategory() {
      return $this->category;
    }
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setPrice($price) {
      $this->price = $price;
    }
  
    public function setImage($image) {
      $this->image= $image;
    }
  
    public function setCategory($category) {
      $this->category = $category;
    }
  }





