<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;
use app\models\Category;


$this->title = 'Добавить категорию';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>

<?php $form = ActiveForm::begin(); ?>
<div class="row">

    <div class="col-xs-6">
        <?= $form->field($model, 'status')->dropDownList([
            Category::NOT_AVAILABLE => 'Не доступно',
            Category::AVAILABLE_MENU => 'Видно в меню',
            Category::AVAILABLE_REFERENCE => 'Доступно только по ссылке',
        ]) ?>
    </div>

    <div class="clearfix"></div>

    <div class="col-xs-6">

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'description')->widget(CKEditor::className(),
            [
                'options' => [
                    'allowedContent' => true,
                ],
                'editorOptions' => ElFinder::ckeditorOptions(
                    'elfinder',
                    [
                        'inline' => false,
                        'skin' => 'office2013,/js/cke/skins/office2013/'
                    ]
                ),

            ]) ?>
    </div>

    <div class="col-xs-6">

        <?= $form->field($model, 'name_en')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'description_en')->widget(CKEditor::className(),
            [
                'options' => [
                    'allowedContent' => true,
                ],
                'editorOptions' => ElFinder::ckeditorOptions(
                    'elfinder',
                    [
                        'inline' => false,
                        'skin' => 'office2013,/js/cke/skins/office2013/'
                    ]
                ),

            ]) ?>
    </div>
</div>
<div class="form-group">
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

