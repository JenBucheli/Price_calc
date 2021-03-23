<?php


class Product
{
    private int $productID;
    private string $name;
    private int $price;

    public function __construct(int $productID, string $name, string $price)
    {
        $this->productID = $productID;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int|string
     */
    public function getPrice()
    {
        return $this->price;
    }
}

