<?php

class Customer
{
    private int $id;
    private string $firstname;
    private string $lastname;
    private int $group_ID;
    private int $fixed_discount;
    private int $variable_discount;


    public function __construct(int $id, string $firstname, string $lastname, int $group_ID, int $fixed_discount, int $variable_discount)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->group_ID = $group_ID;
        $this->fixed_discount = $fixed_discount;
        $this->variable_discount = $variable_discount;
    }

    public static function loadFromDatabase(int $id, string $firstname, string $lastname, int $group_ID, int $fixed_discount, int $variable_discount) : Customer
    {
        $customer = new Customer($firstname, $lastname, $group_ID, $fixed_discount, $variable_discount);
        $customer->id = $id;
        return $customer;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_ID;
    }

    /**
     * @param int $fixed_discount
     */
    public function setFixedDiscount($fixed_discount)
    {
        $this->fixed_discount = $fixed_discount;
    }

    /**
     * @param int $variable_discount
     */
    public function setVariableDiscount($variable_discount)
    {
        $this->variable_discount = $variable_discount;
    }
}