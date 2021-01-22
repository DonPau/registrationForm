<?php
require_once 'Validation.php';
require_once 'Database.php';

class Users
{

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    private Database $db;
    private Validation $validator;
    protected $table_name = 'users';

    public function __construct()
    {
        $this->db = new Database(); // запись объкта в свойство класса
        $this->validator = new Validation();
        print_r($this->validator);
    }

    /**
     * @param string $name
     * @param string $email
     * @param int $status
     * @param string $password
     * @param string|null $city
     */
    public function saveInfo(string $name, string $email, string $password, string $city = null)
    {
        $password = md5($password);
        $status = self::STATUS_ACTIVE; // "self" обращение к методам класса или его константам
        $this->validator->checkAttributes($name, $email, $status, $password, $city);// call method 'checkattributes' from Validation.php
        if ($this->db->query('INSERT INTO ' . $this->table_name . ' (`name`, `email`, `status`, `password`, `city`) VALUES ("' . $name . '", "' . $email . '", "' . $status . '", "' . $password . '", "' . $city . '")')) {
            echo "Данные пользователя  ".$name." сохранены!";
        };
    }


}