<?php

require_once 'controller.php';
require_once DIR_MODEL . 'model_book.php';
require_once DIR_MODEL . 'model_publisher.php';
require_once DIR_MODEL . 'model_category.php';

class ControllerBook extends Controller {
    public function Index($params) {
        
        $this->view->Show('books.tpl',
                array(
                    'books' => Book::Find($this->conn, $params['pubId'], $params['catId']),
                    'pubs' => array(-1 => '- Все -') + Publisher::GetAll($this->conn),
                    'pubId' => $params['pubId'],
                    'cats' => array(-1 => '- Все -') + Category::GetAll($this->conn),
                    'catId' => $params['catId']
                    )
                );
        
//        $this->smarty->assign('books', Book::Find($this->conn, $params['pubId'], $params['catId']));
//
//        $this->smarty->assign('pubs', array(-1 => '- Все -') + Publisher::GetAll($this->conn));
//        $this->smarty->assign('pubId', $params['pubId']);
//
//        $this->smarty->assign('cats', array(-1 => '- Все -') + Category::GetAll($this->conn));
//        $this->smarty->assign('catId', $params['catId']);
//        
//        $this->smarty->display('books.tpl');
    }
    
    public function Delete($params) {
        if (user_admin())
        {
            Book::Delete($this->conn, $params['id']);
        }
        else
        {
            $this->view->Show('access_denied.tpl', array('mode' => 'Удаление книги'));
        }
    }
    
    public function Update($params) {  
        
    }
    
    public function Insert($params) {  
        if (user_admin())
        {
            if ($book = Book::Insert($this->conn, $params)) // save_book
            {
                $this->view->Show('book_inserted.tpl', array('book' => $book));            
            }
            else
            {
                $this->Add($params);
            }
        }
        else
        {
            $this->view->Show('access_denied.tpl', array('mode' => 'Удаление книги'));
        }
    }
    
    public function Edit($params) {
        
    }
    
    public function Show($params) {
        
    }
    
    public function Add($params) {
        //print_r($_SESSION['user']);
        if (user_admin())
        {
            $this->view->Show('book_add.tpl',
                array(
                    'books' => Book::Find($this->conn, $params['pubId'], $params['catId']),
                    'pubs' => array(-1 => '- Все -') + Publisher::GetAll($this->conn),
                    'pubId' => $params['pubId'],
                    'cats' => array(-1 => '- Все -') + Category::GetAll($this->conn),
                    'catId' => $params['catId']
                    ));
        }
        else
        {
            $this->view->Show('access_denied.tpl', array('mode' => 'Добавление книги'));
        }
    }
    
}