<?php
use yii\helpers\Html;
use yii\web\JsExpression;
$this->registerJsFile(Yii::$app->request->baseUrl.'/js/language.js',[
		'depends' => [\yii\web\JqueryAsset::className()],
		'position' => \yii\web\View::POS_END
	]
);
?>
<?php echo Html::beginForm();?>
<div id="language-select">
	<?php
	if(sizeof($languages)<4){
		$lastElement = end($languages);
		foreach($languages as $key=>$lang){
			if($key!=$lang){
				echo Html::ajaxLink($lang,'',array(
						'type'=>'post',
						'data'=>'lang='.$key.'&YII_CSRF_TOKEN='.Yii::$app->request->csrfToken,
						'success'=>'function(data){window.location.reload();}'
					),
					array()
				);
			}else{
				echo '<b>'.$lang.'</b>';
			}
			if($lang!=$lastElement){
				echo ' | ';
			}
		}
	}else{
		echo Html::dropDownList('lang', $currentLang, $languages,array(
			'onchange'=>'language_change(this)',
			'crsf'=>true,
		));
	}		
	?>
</div>
<?php echo Html::endForm();?>