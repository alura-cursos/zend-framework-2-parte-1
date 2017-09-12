<?php

namespace Estoque\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $produtos = [];

        $produtos[] = ['nome' => 'PLaystation 4', 'preco' => 2700, 'descricao' => 'Video game da sony'];
        $produtos[] = ['nome' => 'Xbox 360', 'preco' => 2500, 'descricao' => 'Video game da microsoft'];
        $produtos[] = ['nome' => 'Nitendo wii', 'preco' => 1500, 'descricao' => 'Video game da nintendo'];

        $msg = "Bem vindos ao zend framework";
        $view_params = array(
            'produtos' => $produtos
        );
        return new ViewModel($view_params);
    }
}