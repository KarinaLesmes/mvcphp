<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Request
{
        private $_controlator;
        private $_metodo;
        private $_argumentos;
        
        public function __construct () {
            if(isset($GET['url'])) {
               $url = filter_input(INPUT_GET, 'url' ,FILTER_SANITIZE_URL);
               $url= explode('/',$url);
               $url= array_filter($url);
            }
            
            $this->_controlator = array_shift($url);
            $this->_metodo = array_shift($url);
            $this->_argumentos = $url;
            
            if(!$this->_contolador){
                $this->_controlator = DEFAULT_CONTROLLER;
            }
            
            if (!$this->_metodo) {
                $this->_metodo = 'index';
            }
                {
                {
                   
                    
                        return $this->_metodo;
                                
                                
                    }
            }
            }
                
            
           
            }
            
            
               
            

                