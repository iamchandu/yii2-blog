<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <span class='badge badge-success'><?= date('d-m-Y H:i:s',strtotime($model->date_time)) ?></span>&nbsp;
    <span class='badge badge-info'><?= $model->user->username ?></div>
    <div class='row'><div class='col-sm-6 col-sm-offset-2'><img class='img-rounded' src='<?= Url::base(true)."/".$model->image ?>' alt='<?= $model->title ?>' style='width:100%'/></div></div>
    <div class='col-sm-12'><?= $model->post ?></div>

</div>
