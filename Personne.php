<?php


class Personne
{
    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $adress;

    /**
     * @var
     */
    private $birthday;

    public function __construct($lastName, $firstName, $adress, $birthday='Y-M-d')
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->adress = $adress;
        $this->birthday = $birthday;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Personne
     */
    public function setLastName(string $lastName): Personne
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Personne
     */
    public function setFirstName(string $firstName): Personne
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     * @return Personne
     */
    public function setAdress(string $adress): Personne
    {
        $this->adress = $adress;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     * @return Personne
     */
    public function setBirthday(string $birthday): Personne
    {
        $this->birthday = $birthday;
        return $this;
    }

    public function show(): array
    {
        $lastname = $this->lastName;
        $firstname = $this->firstName;
        $adress = $this->adress;
        $birthday = $this->birthday;
        return array ($lastname, $firstname, $adress, $birthday);
    }

    public function edit($date='Y-M-d'): void
    {
        $this->setBirthday($date);
    }

    public function age($date='Y-M-j'): string
    {
        $date = DateTime::createFromFormat('Y-m-d', $date);
        $birthday = $this->birthday;
        $birthday = DateTime::createFromFormat('Y-m-d', $birthday);
        $age = $date->diff($birthday);
        $age = $age->format('%Y ans, %M mois');
        return $age;
    }


}