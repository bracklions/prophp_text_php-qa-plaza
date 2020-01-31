<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Users Model
 */
class UsersTable extends Table
{
    /**
     * @inheritdoc
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');       // 使用されるテーブル名
        $this->setDisplayField('id');       // list形式でデータ取得する際に使用されるカラム名
        $this->setPrimaryKey('id');         // プライマリーキーとなるカラム名

        $this->addBehavior('Timestamp');    // createdおよびmodifiedカラムを自動設定する
    }
}
