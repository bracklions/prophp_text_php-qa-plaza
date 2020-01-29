<?php
/**
 * 質問詳細画面
 *
 * @param int $id 質問ID
 * @return void
 */
public function view(int $id)
{
    $question = $this->Questions->get($id);

    $answers = $this
        ->Answers
        ->find()
        ->where(['Answers.question_id' => $id])
        ->orderAsc('Answers.id')
        ->all();

    $this->set(compact('questions', 'answers'));
}


namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Answers Model
 */
class AnswersTablesTable extends Table
{
    /**
     * @inheritdoc
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('answers');       // 使用されるテーブル名
        $this->setDisplayField('id');       // list形式でデータ取得する際に使用されるカラム名
        $this->setPrimaryKey('id');         // プライマリーキーとなるカラム名

        $this->addBehavior('Timestamp');    // createdおよびmodifiedカラムを自動設定する

        $this->belongsTo('Questions', [
            'foreignKey' => 'question_id'
            'joinType' => 'INNER'
        ]);
    }
}


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
