<?php

class Trendmarke_Ajaxsession_ValueController extends Mage_Core_Controller_Front_Action
{

    public function unsetAction()
    {
        $_params = $this->getRequest()->getParams();
        $response = true;
        try {
            if (isset($_params['key']) && $_params['key'] != null) {
                Mage::getSingleton('core/session')->unsetData('ajaxsession_'.$_params['key']);
            }
        } catch (Exception $e) {
            $response = true;
        }
        $this->getResponse()->clearHeaders()->setHeader('Content-type','application/json',true);
        $this->getResponse()->setBody(json_encode(array('response' => $response)));
	}
	
	public function setAction()
    {
        $_params = $this->getRequest()->getParams();
        $response = false;
        if (isset($_params['key']) && $_params['key'] != null && isset($_params['value']) && $_params['value'] != null) {
            Mage::getModel('core/session')->setData('ajaxsession_'.$_params['key'],$_params['value']);
            $response = true;
        }
        $this->getResponse()->clearHeaders()->setHeader('Content-type','application/json',true);
        $this->getResponse()->setBody(json_encode(array('response' => $response)));
	}
}