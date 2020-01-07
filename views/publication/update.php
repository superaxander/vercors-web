<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Publication */

$this->title = 'Update Publication: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Publications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="publication-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
			'authors' => $authors,
    	'model' => $model,
    ]) ?>

</div>
