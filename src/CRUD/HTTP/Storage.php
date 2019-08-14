<?php
    namespace App\CRUD\HTTP;

    use App\Shared\Interfaces\StorageInterface;
    use App\Shared\Models\Entity as Model;

final class Storage implements StorageInterface
{
    public function create(Array $input) : Array
    {
        return [
            'success' => true,
        ];
    }
    
    public function read(Array $input) : Array
    {
        return [];
    }
    
    public function readAll(Array $input) : Array
    {
        return Model::get()
            ->toArray();
    }

    public function update(Array $input) : Array
    {
        return [
            'success' => true,
        ];
    }

    public function delete(Array $input) : Array
    {
        return [
            'success' => true,
        ];
    }
}
