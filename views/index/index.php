<?php

use humhub\widgets\Button;

// Register our module assets, this could also be done within the controller
\humhub\modules\quiz\quiz\assets\Assets::register($this);

$displayName = (Yii::$app->user->isGuest) ? Yii::t('QuizModule.base', 'Guest') : Yii::$app->user->getIdentity()->displayName;

?>

<div class="panel-heading"><strong>Quiz</strong> <?= Yii::t('ProductModule.base', 'overview') ?></div>

<div class="panel-body"><div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Name of quiz 1</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Name of quiz 2</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Name of quiz 3</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>
<p class="panel-heading">
rule
</p>
<p>this page will be visible to guest but to be able to take the test, studets must login. <br />
once the quiz is clicked, go to /quiz/quiz-url. after students have finished the quiz, <br />they will the score.
</div>
