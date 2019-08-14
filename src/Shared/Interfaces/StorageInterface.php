<?php
    namespace App\Shared\Interfaces;

interface StorageInterface
{
    public function create(Array $input) : Array;

    public function read(Array $input) : Array;

    public function update(Array $input) : Array;

    public function delete(Array $input) : Array;
}
