<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 */
class Answer extends Entity
{
    /**
     * @var array 各プロパティが一括代入出来るかどうかの情報
     */
    protected $_accessible = [
        'question_id' => true,
        'user_id' => true,
        'body' => true,
        'created' => true,
        'modified' => true
    ];
}
