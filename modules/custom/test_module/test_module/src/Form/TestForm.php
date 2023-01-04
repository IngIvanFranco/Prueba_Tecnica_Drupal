<?php
namespace Drupal\test_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class TestForm extends FormBase{

public function buildForm(array $form, FormStateInterface $form_state){
    $form['apellido'] = array(
        '#type'=>'texrfield',
        '#title'=>t('apellido'),
        '#required'=>TRUE
    );

    $form['nombre'] = array(
        '#type'=>'texrfield',
        '#title'=>t('nombre'),
        '#required'=>TRUE
    );

    
    $form['tipodocumento'] = array(
        '#type'=>'texrfield',
        '#title'=>t('tipodocumento'),
        '#required'=>TRUE
    );

    
    $form['numerodocumento'] = array(
        '#type'=>'texrfield',
        '#title'=>t('numerodocumento'),
        '#required'=>TRUE
    );


    $form['numerodocumento'] = array(
        '#type'=>'texrfield',
        '#title'=>t('numerodocumento'),
        '#required'=>TRUE
    );

    $form['correo'] = array(
        '#type'=>'email',
        '#title'=>t('correo'),
        '#required'=>TRUE
    );

    $form['telefono'] = array(
        '#type'=>'number',
        '#title'=>t('telefono'),
        '#required'=>TRUE
    );

    $form['pais'] = array(
        '#type'=>'texrfield',
        '#title'=>t('pais'),
        '#required'=>TRUE
    );


    $form['action']['#type'] = 'actions';
    $form['action']['submit'] = array(
        '#type'=>'submit',
        '#value'=>this->t('Save'),
        '#button_type'=>'primary',
    );
    return $form;
}


}
?>