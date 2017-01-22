<?php

namespace App\Controller;

use Cake\Mailer\Email;

class CorreoController extends AuthController{
    
    function Index() {
        
        $email = new Email('default');
        $email->from(['noreply@tecsup.edu.pe' => 'Tienda Online'])
                ->to('addrmh@gmail.com')
                ->subject('Contacto desde Tienda')
                ->send('Contenido...');
        
        $this->Flash->success('Correo enviado satisfactoriamente');
        return $this->redirect(['controller' => 'home', 'action' => 'index']);
        
    }
    
}
