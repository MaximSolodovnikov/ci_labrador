<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {
    
    /*Rules for adding article*/
    public $articles = array (
        
        array
            (
                'field' => 'title',
                'label' => 'Название статьи',
                'rules' => 'required'
            ),
        
        array
            (
                'field' => 'title_url',
                'label' => 'Название статьи латиницей',
                'rules' => 'required'
            ),
         
        array
            (
                'field' => 'text',
                'label' => 'Текст',
                'rules' => 'required'
            ),
        array
            (
                'field' => 'keywords',
                'label' => 'Ключевые слова',
                'rules' => 'required'
            )
    );
    
    /*Rules for adding users*/
    public $users = array
        (
            array
                (
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required'
                ),
            array
                (
                    'field' => 'pswd',
                    'label' => 'Пароль',
                    'rules' => 'required'
                )
            
        );
    public $slider = array 
            ();
}