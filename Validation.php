<?php


class Validation
{
    public $name;
    public $email;
    public $city;
    public $status;
    public $password;

    /**
     * @param string $name
     * @param string $email
     * @param int $status
     * @param string $password
     * @param string|null $city
     */
    public function checkAttributes(string $name, string $email, int $status, string $password, string $city = null) //typeHintinting
    {
        $this->name = $name;
        $this->email = $email;
        $this->city = $city;
        $this->status = $status;
        $this->password = $password;

        return true;
    }




}