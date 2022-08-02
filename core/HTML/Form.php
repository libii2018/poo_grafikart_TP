<?php  

namespace Core\HTML;

/**
 * Class Form
 * Permet de générer un fromulaire rapidement et simplement
 */

class Form {

    /**
     * @var array Données utilisées par le fromulaire
     */

    protected $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */

    public $surround = 'p';

    /**
     * @param striing $data Données utilisées par le fromulaire
     */

    public function __construct($data = array()) {
        $this->data = $data;
    }

    /**
     * @param $html string code HTML à entourer 
     * @return string
     */    
    protected function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}";
    }

    /**
     * @param $index string index de la valeur a récupérer 
     * @return string
     */  
    protected function getValue($index) {
        if(is_object($this->data)) {
            return $this->data->$index; 
        }
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string  
     * @return string
     */ 
    public function input($name, $label, $options = []) {
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround('<input type="' . $type .'" name="' . $name . '" value="' . $this->getValue($name) . '">');
    }

    /**
     * @param $name string  
     * @return string
     */ 
    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}