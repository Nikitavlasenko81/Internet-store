<?
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<? if(Yii::$app->session->hasFlash('success')) : ?>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading"><?=Yii::$app->session->getFlash('success')?></h4>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<? endif; ?>


<? if(Yii::$app->session->hasFlash('error')): ?>
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading"><?=Yii::$app->session->getFlash('error')?></h4>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" >&times;</span>
  </button>
</div>
<? endif; ?>


<?$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]);?>
<?= $form->field($model,'name')->label('Имя')?>
<?= $form->field($model,'email')->label('Email')->input('email')?>
<?= $form->field($model,'text')->label('Коментарий')->textarea(['rows'=>'10'])?>
<?= HTML::submitButton('Отправить',['class'=> 'btn'])?>


<?ActiveForm::end();?>

<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> -->





