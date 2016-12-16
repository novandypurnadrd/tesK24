<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	public function actionMember()
	{
		$model = new MemberForm();
		if (isset ($_POST['member']))
		{
			$model ->nama = $_POST['member']['name'];
			$model ->alamat = $_POST['member']['address'];
			$model ->ttl = $_POST['member']['ttl'];
			$model ->email = $_POST['member']['email'];
			$model ->telpn = $_POST['member']['phone'];
			$model->save();
			}
		$this ->render('forms',array('model'=>$model));
	}

	public function actionView()
	{
		$this ->render('forms',array('');
	}
}
?>