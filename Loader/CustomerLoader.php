<?php


class CustomerLoader
{
    //get customer from the DB
    public static function getCustomer(Pdo $pdo, int $id): Customer
    {
        //use bindValue to prevent SQL INJECTION
        $query = $pdo->prepare('select * from customer  where id= :id');
        $query->bindValue('id', $id);
        $query->execute();
        $rawData = $query->fetch();
        return Customer::loadFromDatabase($id, $rawData['firstName'], $rawData['lastName'], $rawData['group_ID'], $rawData['fixed_discount'], $rawData['variable_discount']);
    }

    public static function getAllCustomers(Pdo $pdo): array
    {
        $query = $pdo->prepare('select * from customer  ORDER BY lastname');
        $query->execute();
        $raw_customers = $query->fetchAll();

        $customers = [];
        foreach ($raw_customers as ['id' => $id, 'firstname' => $firstName, 'lastname' => $lastName, 'group_id' => $group_id, 'fixed_discount' => $fixed_discount, 'variable_discount' => $variable_discount])
        {
            $customers[] = Customer::loadFromDatabase(
                $id,
                $firstName,
                $lastName,
                $group_id,
                $fixed_discount,
                $variable_discount);
        }
        return $customers;
    }
}