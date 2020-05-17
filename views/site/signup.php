<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */

$this->title = Yii::$app->name.' | '.Yii::t('app', 'Registar');

?>

<section class="section mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="">
                    <div class="text-center">
                        <h3  class="display-3">
                            <?= Yii::t('app', 'Registar') ?>
                        </h3>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <?php
                        $form = ActiveForm::begin([
                                    'id' => 'signup-form',
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
                                        'template' => "<div class=\"row\">{label}\n<div class=\"col-lg-12\">{input}</div></div>\n<div class=\"row\"><div class=\"col-lg-12 text-danger\">{error}</div></div>",
                                        'labelOptions' => ['class' => 'col-lg-12 control-label'],
                                    ],
                        ]);

                        ?>
                        <?=
                                $form->field($model, 'username')
                                ->textInput(['placeholder' => $model->getAttributeLabel('username'), 'autofocus' => true, 'class' => 'form-control shadow border-0'])

                        ?>
                        <?=
                                $form->field($model, 'email')
                                ->textInput(['placeholder' => $model->getAttributeLabel('email'), 'class' => 'form-control shadow border-0'])

                        ?>
                        <?=
                                $form->field($model, 'password')
                                ->passwordInput(['placeholder' => $model->getAttributeLabel('password'), 'class' => 'form-control shadow border-0'])

                        ?>

                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                                <label class="custom-control-label" for="terms">
                                    <?= Yii::t('app', 'Li e aceito as').' '.Html::a(Yii::t('app', 'Termos de Uso'), \yii\helpers\Url::to(['terms'])); ?>.
                                </label>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <?= Html::submitButton(Yii::t('app', 'Registar'), ['class' => 'btn btn-primary btn-block shadow border-0', 'type' => 'submit', 'id' => 'register-btn']); ?>
                            </div>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(function () {
        $('#register-btn').attr('disabled', true);
    });

    $('.custom-control-input').on('click', function () {
        terms = $('#terms').is(":checked");

        if (terms) {
            $('#register-btn').attr('disabled', false);
        } else {
            $('#register-btn').attr('disabled', true);
        }
    });

</script>
