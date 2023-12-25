<?php

namespace app\models;

/**
 * User model
 * @property int $id
 * @property int $name
 */
class User
{
    public function rules(): array
    {
        return [
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 256],
        ];
    }

}
