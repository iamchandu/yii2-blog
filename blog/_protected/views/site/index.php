<?php
/* @var $this yii\web\View */
use app\models\Posts;

$this->title = Yii::t('app', Yii::$app->name);
$posts = Posts::find()->where(['status'=>'active'])->all();
?>
<div class="site-index">
    <?php if(count($posts)>0){ 
        foreach($posts as $post){ ?>
        <div class='col-sm-4'>
            <div class='panel panel-info'>
                <div class='panel-body'>
                    <img class='img-rounded' src='<?= $post->image ?>' alt='<?= $post->title ?>' style='width:100%'/>
                    <a href='posts/view?id=<?= $post->id ?>'><h4 class='text-center'><?= $post->title ?></h4></a>
                </div>
            </div>
        </div>
    <?php 
        }
    }else{ ?>
        <div class='alert alert-danger'>No Posts Found.</div>
    <?php } ?>
</div>

