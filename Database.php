<?php


class Database
{
    private $pdo; // свойство
    private string $dsn = 'mysql:host=localhost;dbname=registration_form';
    private string $username = 'mysql';
    private string $password = 'mysql';

    public function __construct() // встроеный метод если нужно привести обект в какоето состояние
    {
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);
    }

    /**
     * @param string $sql
     * @param null $params
     * @return array|null
     */
    public function query(string $sql, $params = null) // метод
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
        var_dump($result);
        var_dump($sth);
        if($result === false){
            print_r($sth->errorInfo());
            return null;
        }
        return $sth->fetchAll(); //
    }
}