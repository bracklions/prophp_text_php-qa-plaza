<h2 class="mb-3"><i class="fas fa-user"></i> ユーザー登録</h2>

<?= $this->Form->create($user) ?>
<?= $this->Form->control('username', ['label' => 'ユーザー名', 'maxlength' => 50]) ?>
<?= $this->Form->control('password', ['label' => 'パスワード', 'value' => '', 'maxlength' => 50]) ?>
<?= $this->Form->control('password_confirm', ['label' => 'パスワード確認用', 'value' => '', 'required' => true, 'type' => 'password', 'maxlength' => 50]) ?>
<?= $this->Form->control('nickname', ['label' => 'ニックネーム', 'maxlength' => 50]) ?>
<?= $this->Form->button('登録する', ['class' => 'btn btn-warning mb-5']) ?>
<?= $this->Form->end() ?>
