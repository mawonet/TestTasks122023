<?php

namespace app\models;

/**
 * Article model
 * @property int $id
 * @property int $author_id
 * @property int $text
 */
class Article
{
    public function rules(): array
    {
        return [
            [['id','author_id'], 'integer'],
            [['text'], 'string', 'max' => 256],
        ];
    }

    /**
     * Возвращает все статьи автора по его id
     * @param int $author_id
     * @return array
     */
    public function getAllArticlesByAuthorId(int $author_id): array
    {
        return [];
    }

    /**
     * Возвращает автора статьи
     * @param int $id
     * @return int
     */
    public static function getAuthorById(int $id): int
    {
       return 1;
    }

    /**
     * Возвращает статью
     * @param $id
     * @return Article
     */
    public static function find($id): Article
    {

    }
}

