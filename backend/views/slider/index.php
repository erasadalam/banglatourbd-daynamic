<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Slider', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php    // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'description:text',
            'image_path:text',
            /*[
                'label' => 'Slider Image',
                'attribute' => 'image_path',
                'format' => 'html',
                'value' => function($model){
                    return yii\bootstrap\Html::img($model->image_path,['width' => '150']);
                    //Yii::$app->urlManagerBackend->baseUrl
                }
            ],*/
            //'status',
            [
                'label' => 'Status',
                'attribute' => 'status',
                'value'=> function($model){
                    return $model->status == 1 ? 'Active' : 'Inactive';
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
