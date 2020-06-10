<?php
class Burger
{
public function getUserByEmail(string $email)
{
    $db = Db::getInstance();
    $query = "SELECT * FROM users WHERE email = :email";
    return $db->fetchOne($query, __METHOD__,[':email' => $email]);
}

    public function createUser(string $email, string $name)
    {
        $db = Db::getInstance();
        $query ="INSERT INTO `db`.`users` (`email`, `name`) VALUES (:email, :name)";
        $result = $db->exec($query,__METHOD__,
            [
                'email' => $email,
                'name' => $name
        ]);
        if (!$result)
        {
            return false;
        }
        return $db->lastInsertId();
    }

    public function addOrder(int $user_Id, array $data)
    {
        $db = Db::getInstance();
        $query ="INSERT INTO orders(user_Id, address, create) VALUES (:user_Id, :address, :create)";
        $result = $db->exec($query,__METHOD__,
        [
            'user_Id' => $user_Id,
            'address' => $data['address'],
            'create' => date('Y-m-d H:i:s'),
        ]
    );
        if (!$result)
        {
            return false;
        }return $db->lastInsertId();
    }

    public function incOrders(int $user_Id)
    {
        $db = Db::getInstance();
        $query = "UPDATE users SET orders = orders +1 WHERE id = $user_Id";
        return $db->exec($query,__METHOD__);
    }
}