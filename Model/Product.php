<?php


class Product
{
    private int $product_ID;
    private string $name;
    private int $price;

    public function __construct(int $product_ID, string $name, string $price)
    {
        $this->product_ID = $product_ID;
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getProduct_ID()
    {
        return $this->product_ID;
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

