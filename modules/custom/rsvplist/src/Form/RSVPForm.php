<?php

// @file contains \drupal\rsvplist\form\rsvpform


namespace Drupal\rsvplist\Form;
use Drupal\Core\Database\Database;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RSVPForm extends FormBase{

    public $message;

public function getFormId()
{
    return 'rsvplist_email_form';
}

public function buildForm(array $form, FormStateInterface $form_state){
    $node = \Drupal::routeMatch()->getParameter('node');
    $nid = $node->nid->value;

    $form['email'] = [
    '#title' => $this->t('email address'),
    '#type' => 'textfield',
    '#size' => 25,
    'description' => $this->t("we'll send updates to email address you provide."),
    '#required' => TRUE,

    ];

    $form['submit'] = [

        '#type' => 'submit',
        '#value' => $this->t('RSVP'),
    ];

    $form['nid'] = [
        '#type' => 'hidden',
        '#value' => $nid,

    ];
    return $form;   
}

public function submitForm(array &$form, FormStateInterface $form_state){
    echo 'the form is working';
      $this->messenger->addError("successfull");
} 
}
?>