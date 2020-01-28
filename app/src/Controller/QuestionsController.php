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
}
