<?php 
/************************************************************
 * DESIGNERS: SCROLL DOWN! (IGNORE ALL THIS STUFF AT THE TOP)
 ************************************************************/
defined('C5_EXECUTE') or die("Access Denied.");
use \Concrete\Block\Form\MiniSurvey;

$survey = $controller;
$miniSurvey = new MiniSurvey($b);
$miniSurvey->frontEndMode = true;

//Clean up variables from controller so html is easier to work with...
$bID = intval($bID);
$qsID = intval($survey->questionSetId);
$formAction = $view->action('submit_form').'#formblock'.$bID;

$questionsRS = $miniSurvey->loadQuestions($qsID, $bID);
$questions = array();
while ($questionRow = $questionsRS->fetchRow()) {
	$question = $questionRow;
	$question['input'] = $miniSurvey->loadInputType($questionRow, false);
	
	//Make type names common-sensical
	if ($questionRow['inputType'] == 'text') {
		$question['type'] = 'textarea';
	} else if ($questionRow['inputType'] == 'field') {
		$question['type'] = 'text';
	} else {
		$question['type'] = $questionRow['inputType'];
	}

    	$question['labelFor'] = 'for="Question' . $questionRow['msqID'] . '"';
	
	//Remove hardcoded style on textareas
	if ($question['type'] == 'textarea') {
		$question['input'] = str_replace('style="width:95%"', '', $question['input']);
	}
	
	$questions[] = $question;
}

//Prep thank-you message
$success = (\Request::request('surveySuccess') && \Request::request('qsid') == intval($qsID));
$thanksMsg = $survey->thankyouMsg;

//Collate all errors and put them into divs
$errorHeader = isset($formResponse) ? $formResponse : null;
$errors = isset($errors) && is_array($errors) ? $errors : array();
if (isset($invalidIP) && $invalidIP) {
	$errors[] = $invalidIP;
}
$errorDivs = '';
foreach ($errors as $error) {
	$errorDivs .= '<div class="error">'.$error."</div>\n"; //It's okay for this one thing to have the html here -- it can be identified in CSS via parent wrapper div (e.g. '.formblock .error')
}

//Prep captcha
$surveyBlockInfo = $miniSurvey->getMiniSurveyBlockInfoByQuestionId($qsID, $bID);
$captcha = $surveyBlockInfo['displayCaptcha'] ? Loader::helper('validation/captcha') : false;

/******************************************************************************
* DESIGNERS: CUSTOMIZE THE FORM HTML STARTING HERE...
*/?>

<?php  if ($errors): ?>

	<div class="form-errors">
		<?php  echo $errorHeader; ?>
		<?php  echo $errorDivs; /* each error wrapped in <div class="error">...</div> */ ?>
	</div>

<?php  endif; ?>
<?php  if ($success){ ?>
	<div  class="success-message">
		<i class="fa fa-check"></i> <?php  echo h($thanksMsg); ?>
	</div>
<?php }else{ ?>
<div id="formblock" class="ccm-block-type-form">
<form enctype="multipart/form-data" class="form-stacked miniSurveyView" id="miniSurveyView<?php  echo $bID; ?>" method="post" action="<?php  echo $formAction ?>">
	<div class="fields">
		
		<?php  foreach ($questions as $question): ?>
			<div class="form-group inscription col-xs-12 col-sm-6  field field-<?php  echo $question['type']; ?> <?php echo isset($errorDetails[$question['msqID']]) ? 'has-error' : ''?>">
				<label class="control-label" <?php  echo $question['labelFor']; ?>>
					<?php  echo $question['question']; ?>
                    <?php if ($question['required']): ?>
                        <span class="text-muted small" style="font-weight: normal">*</span>
                    <?php  endif; ?>
				</label>
				<?php  echo $question['input']; ?>
				<?php echo (($question['type'] == 'select')?'<span class="text-muted small" style="font-weight: normal; font-size: 11px"><i class="fa fa-warning"></i><small> femmes(5 filles), hommes (filles acceptées), mixte(max. 2 hommes)</small></span>':'') ?>

			</div>
		<?php  endforeach; ?>
		
	</div><!-- .fields -->
	
	<?php  if ($captcha): ?>
		<div class="form-group captcha">
			<?php
			$captchaLabel = $captcha->label();
			if (!empty($captchaLabel)) {
				?>
				<label class="control-label"><?php echo $captchaLabel; ?></label>
				<?php
			}
			?>
			<div><?php  $captcha->display(); ?></div>
			<div><?php  $captcha->showInput(); ?></div>
		</div>
	<?php  endif; ?>

	<div class="form-actions col-xs-12">
		<input type="submit" name="Submit" class="btn calltoaction primary" value="C'est parti !" />
	</div>

	<input name="qsID" type="hidden" value="<?php  echo $qsID; ?>" />
	<input name="pURI" type="hidden" value="<?php  echo isset($pURI) ? $pURI : ''; ?>" />
	
</form>
</div><!-- .formblock -->
<?php } ?>