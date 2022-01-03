<?php

namespace alinivan;

require_once 'vendor/autoload.php';
require_once 'StringValidator.php';

class Validator extends StringValidator {
    /**
     * @param string $firstname
     * @return bool
     */
    public function firstname(string $firstname): bool
    {
        return $this->stringContainsTheseNumberOfChars($firstname, 25);
    }

    /**
     * @param string $lastname
     * @return bool
     */
    public function lastname(string $lastname): bool
    {
        return $this->stringContainsTheseNumberOfChars($lastname, 25);
    }

    /**
     * @param string $companyName
     * @return bool
     */
    public function companyName(string $companyName): bool
    {
        return $this->stringContainsTheseNumberOfChars($companyName, 25);
    }

    /**
     * @param string $streetAddress
     * @return bool
     */
    public function streetAddress(string $streetAddress): bool
    {
        return $this->stringContainsTheseNumberOfChars($streetAddress, 100);
    }

    /**
     * @param string $city
     * @return bool
     */
    public function city(string $city): bool
    {
        return $this->stringContainsTheseNumberOfChars($city, 25);
    }

    /**
     * @param string $country
     * @return bool
     */
    public function country(string $country): bool
    {
        return $this->stringContainsTheseNumberOfChars($country, 25);
    }

    /**
     * @param string $zipcode
     * @return bool
     */
    public function zipcode(string $zipcode): bool
    {
        return $this->stringContainsTheseNumberOfChars($zipcode, 10);
    }

    /**
     * @param string $phone
     * @return bool
     */
    public function phone(string $phone): bool
    {
        return $this->stringContainsTheseNumberOfChars($phone, 15);
    }

    /**
     * @param string $email
     * @return bool
     */
    public function email(string $email): bool
    {
        return $this->stringContainsTheseNumberOfChars($email, 50);
    }
}