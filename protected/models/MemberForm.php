<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class MemberForm extends CFormModel
{
	public $name;
	public $address;
	public $phone;
	public $email;
	public $ttl;
	
	

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('name,address,phone,email, ttl', 'required'),
			// email has to be a valid email address
			array('email', 'email'),
			// verifyCode needs to be entered correctly
			//array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	public function tablename()
	{
		return 'member';
	}


	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'id_member'=>'',
			'nama'=>'name',
			'alamat'=>'address',
			'email'=>'email',
			'ttl'=>'ttl',
			'id_member'=>'telpn'
		);
	}
}