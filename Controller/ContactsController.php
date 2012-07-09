<?php
App::uses('AppController', 'Controller');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 */
class ContactsController extends AppController {


/**
 * send method
 *
 * @return void
 */
	public function send() {
		$this->layout = 'page';
		if ($this->request->is('post')) {
			$this->Contact->set($this->request->data);
			if ($this->Contact->validates()) {
				$this->Email->delivery = 'smtp';
				$this->Email->from = $this->request->data['Contact']['name'] . '<' . $this->request->data['Contact']['email'] .'>';
				$this->Email->to = 'tamsmiranda@gmail.com';
				$this->Email->subject = 'Contato';
				$this->Email->sendAs = 'both';
				if ($this->Email->send($this->request->data['Contact']['message'] . $this->request->data['Contact']['phone'])) {
					$this->redirect(array('controller' => 'Contacts', 'action' => 'tanks'));
				} else {
					$this->Session->setFlash(__('The contact could not be send. Please, try again.') . $this->Email->smtpError);
				}
			} else {
				$this->Session->setFlash(__('The contact could not be send. Please, try again.'));
			}
		}
	}
	
	public function tanks() {
		$this->layout = 'page';
	}

}
