<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row">
                <div class="col-xl-6">
                    <?= $form->field($model, 'name')->label('')->textInput(['placeholder'=>'Name*']) ?>
                </div>
                <div class="col-xl-6">
                    <?= $form->field($model, 'email')->label('')->textInput(['placeholder'=>'Email*']) ?>
                </div>
                <div class="col-xl-12">
                    <?= $form->field($model, 'subject')->label('')->textInput(['placeholder'=>'Subject*']) ?>
                </div>
                <div class="col-xl-12">

                    <?= $form->field($model, 'body')->textarea(['placeholder'=>'Body','rows' => 6])->label(false) ?>


                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
