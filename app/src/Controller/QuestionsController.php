<?php

namespace App/Controller;

/**
 * Questuions COntroller
 */
class QuestionsController extends  AppController
{
    /**
     * @inheritdoc
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Answers');
    }

    /**
     * 質問一覧画面
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $questions = $this->paginate($this->Questions->find(), [
            'order' => ['Questions.id' => 'DESC']
        ]);

        $this->set(compac('questions'));
    }

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
}
