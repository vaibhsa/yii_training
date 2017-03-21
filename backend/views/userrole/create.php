<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */

$this->title = 'Create User Role';
$this->params['breadcrumbs'][] = ['label' => 'User Role', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">
	<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h4 class="title"><?= Html::encode($this->title) ?></h4>
					<p class="category">Please fill out the following fields to role:</p>
                </div>
    			<div class="card-content">
				    <?= $this->render('_form', [
				        'model' => $model,
				        'authItems' => $authItems,
				        'authitemchilds' =>$authitemchilds,
				    ]) ?>
				</div>
			</div>
		</div>
	</div>
</div>
