<?php

require_once ROOT_PATH . '/abstract-factory/CompanyFactory.php';

class TestPerson extends PHPUnit\Framework\TestCase
{
    //Verify insert
    public function test_insert_person()
    {
        $this->assertIsString((new PersonFactory("Valentin")), "");
    }

    //Verify get
    // public function test_get_company()
    // {
    //     $this->assertIsString((new CompanyFactory("Valentin")), "");
    // }
}
