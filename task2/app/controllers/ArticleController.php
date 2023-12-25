<?php

namespace app\controllers;

use app\models\Article;
use app\models\User;

/**
 * Контроллер Статей
 * для всего функционала из условия
 * (считаю что нужен только он)
 * @author Александр Бурштын
 */
class ArticleController
{

    /**
     * Создание новой статьи
     * @param int $authorId
     * @return bool
     */
    public function createNewArticleByAuthorId(int $authorId) : bool
    {
        $article = new Article();
        $article->author_id = $authorId;

        if ($article->save()){
            return true;
        }
        return false;
    }

    /**
     * Обновляем автора статьи
     * @param int $id
     * @param int $authorNew
     * @return bool
     */
    public function updateAuthor(int $id, int $authorNew): bool
    {
        $article = Article::find($id);
        $article->author_id = $authorNew;

        if ($article->save()){
            return true;
        }
        return false;

    }

}