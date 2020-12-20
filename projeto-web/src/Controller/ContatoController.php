<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

class ContatoController extends AppController
{
    public function index() {
        // $this->loadModel('Contato');

        // $arr = $this->Contato->find()
        // ->where(['status'] => 1)
        // ->first();

        // $this->set(compact('arr'));
    }

    public function add() {
        
    }

    public function edit($id = null) {
        
    }

    public function delete($id = null) {
        
    }
}
