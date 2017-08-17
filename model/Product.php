<?php

/**
 * Class Product
 */
abstract class Product
{

    private $name;

    private $price;

    private $description;

    private $size;

    private $type;

    private $material;

    /**
     * Product constructor.
     * @param $name
     * @param $price
     * @param $description
     * @param $size
     * @param $type
     * @param $material
     */
    public function __construct($name, $price, $description, $size, $type, $material)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->size = $size;
        $this->type = $type;
        $this->material = $material;
    }

    //Getters and setters section

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

}