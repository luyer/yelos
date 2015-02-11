<?php
App::uses('AppController', 'Controller');
/**
 * Sitios Controller
 *
 */
class SitiosController extends AppController {

    public function inicio() {
        
        #busco los destacados
        $this->loadModel('Producto');
        $destacados = $this->Producto->find('all',
            array('conditions' => array('Producto.destacado' => 1),
                  'limit' => 8, )
        );
        #debug($destacados);die;
        $this->set('destacados',$destacados);
        $this->render('inicio','yelos');
    }
    
    public function contacto(){
        
    }




}