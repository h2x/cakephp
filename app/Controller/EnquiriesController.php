<?php
/**
 * Created by JetBrains PhpStorm.
 * User: h2x
 * Date: 8/18/13
 * Time: 5:05 PM
 * To change this template use File | Settings | File Templates.
 */
App::uses('AppController','Controller');
App::uses('CakeEmail','Network/Email');
class EnquiriesController extends AppController {


    public function index() {


        //debug($this->request->data);


        if (!empty($this->data)){
            $name=$this->request->data['firstName'].$this->request->data['lastName'];
            $contact=$this->request->data['contact'];

            $emailMessage=$this->request->data['message'];

            $Email = new CakeEmail();
            $Email->config('gmail')
                ->emailFormat('html')
                ->template('Enquiry')
                ->from(array('hxu68@student.monash.edu'=>$name))
                ->to('haohan87@hotmail.com')
                ->subject($this->request->data['subject'])
                ->viewVars(compact('name','contact','emailMessage'));
            //debug($this->request);

            if($Email->send()){

                //debug($myArr);
                $this->Session->setFlash('Your enquiry has been sent. We will get back to you as soon as we could.','flash_good');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Fail','flash_bad');
            }

       }
    }


}