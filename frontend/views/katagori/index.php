<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\katagoriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Katagoris';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="katagori-index">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'parent_catagori',
            
        ],
    ]); ?>


</div>
