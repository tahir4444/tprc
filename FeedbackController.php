<?php
class Tech_FormsManagement_FeedbackController extends Mage_Core_Controller_Front_Action{
	/* public function IndexAction() {

		$this->loadLayout();   
		$this->getLayout()->getBlock("head")->setTitle($this->__("Titlename"));
		$breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
		$breadcrumbs->addCrumb("home", array(
			"label" => $this->__("Home Page"),
			"title" => $this->__("Home Page"),
			"link"  => Mage::getBaseUrl()
		));

		$breadcrumbs->addCrumb("titlename", array(
		"label" => $this->__("Titlename"),
		"title" => $this->__("Titlename")
		));

		$this->renderLayout(); 

	} */
	
	public $required		=	array(
		'name'			=> true,
		'email'			=> true,
		'telephone'		=> false,
		'comments'		=> true,
	);
	
	protected function _checkRequired($field,$data) {
		if($required[$field] && empty($data[$field])){
			return true;
		} else {
			return false;
		}
	}
	
	public function postAction () {
		echo 'test'; die('died');
		if($this->getRequest()->getPost()) {
			
			$post		=	$this->getRequest()->getPost();
			$errors	=	array();
			
			if($this->_checkRequired('name', $post)) {
				$errors[]	=	'First Name is required';
			}
			if($this->_checkRequired('email', $post)) {
				$errors[]	=	'Email address is required';
			}
			if($this->_checkRequired('telephone', $post)) {jk
				$errors[]	=	'Last name is required';
			}
			if($this->_checkRequired('comments', $post)) {
				$errors[]	=	'Comments are required';
			}
			
			if(!empty($errors)) {
				foreach($errors as $error) {
					Mage::getSingleton('core/session')->addError($error);
				}
				$this->_redirect('feedback');
			} else {
				try {
					//saving data
					$this->_save($post);
					
					//sending Email
					$this->_sendEmail($post);
					
					//setting the success message
					Mage::getSingleton('core/session')->addSuccess('Thanks for submitting the finance');
					$this->_redirect('feedback'); //redirecting user to it's reffered page;
				
				} catch (Exception $e) {
					Mage::getSingleton('core/session')->addError($e->getMessage());
					$this->_redirect('feedback');
				}
			}
		} else {
			echo 'test';
			Mage::getSingleton('core/session')->addError('Fill the required fields');
			$this->_redirect('feedback');
			
		}
	}
	
	private function _sendEmail ($data = NULL) {
		
		$is_enable			=	Mage::getStoreConfig('forms_management_feedback/forms_management_feedback_group/feedback_group_is_enable',Mage::app()->getStore());
		$email_to			=	explode(',',Mage::getStoreConfig('forms_management_feedback/forms_management_feedback_group/feedback_group_send_to',Mage::app()->getStore()));
		$email_template	=	Mage::getStoreConfig('forms_management_feedback/forms_management_feedback_group/feedback_group_email_template',Mage::app()->getStore());
		// print_r($email_to);
		// print_r($data);
		// echo get_class($this);
		//sending email
		$templateId	=	$email_template;
		$sender		=	array('name' => $post['name'], 'email' => $post['email']);
		$translate	=	Mage::getSingleton('core/translate');
		
		foreach($email_to as $email) {
			Mage::getModel('core/email_template')->sendTransactional(
				$templateId,
				$sender,
				/* Sender Email */
				$email,
				/* Sender Name */
				// Mage::getStoreConfig('trans_email/ident_general/name'), 
				$post,
				Mage::app()->getStore()->getId()
			);
		}

		$translate->setTranslateInline(true);
		/*email sent*/
	}
	
	private function _save($data = NULL) {
		//Save to datatabase
		$model	=	Mage::getModel('formsmanagement/feedback');
		$model->setData($post);
		$now = Mage::getModel('core/date')->timestamp(now());
		$model->setCreatedOn(date('Y-m-d H:i:s',$now));
		$model->save();
	}

}