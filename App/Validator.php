<?php

namespace App\Validator;

/**
 * Class Validator permet de verifier les données transmise au formulaire
 */
class Validator
{

    /**
     * Le tableau data permet de passer un tableau d'argument qui sera passé au formulaire via la variable super globale $_POST
     *
     * @var array
     */
    private $datas = [];

    /**
     * Stocker les erreurs du formulaire
     *
     * @var array
     */
    private $errors = [];

    /**
     * Permet de créer le validateur via la super variable globale
     *
     * @var $datas
     */
    public function __construct($datas)
    {
        $this->datas = $datas;
    }

    /**
     * La fonction check permet de checker si des erreurs sont passé au formulaire
     *
     * @param string $name
     * @param string $rule
     * @param boolean $options
     * @return void
     */
    public function check($name, $rule, $options = false)
    {
        $validator = "validate$rule";
        if (!$this->$validator($name, $options)) {
            $this->errors[$name] = "Le champ $name n'a pas été correctement rempli";
        }
    }

    /**
     * Fonction permettant de verifier un input required
     *
     * @param string $name
     * @return void
     */
    public function validateRequired($name)
    {
        return array_key_exists($name, $this->datas) && $this->datas[$name] != "";
    }

    /**
     * Fonction permettant de verifier un input de type email
     *
     * @param string $name
     * @return void
     */
    public function validateEmail($name)
    {
        return array_key_exists($name, $this->datas) && filter_var($this->datas[$name], FILTER_VALIDATE_EMAIL);
    }

    /**
     * Fonction permettant de retourner les erreurs contenu dans le tableau errors initialisé plus haut
     *
     * @return void
     */
    public function errors()
    {
        return $this->errors;
    }
}
