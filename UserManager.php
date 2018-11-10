<?php
class UserManager
{
    private $_db; // instance de PDO

    public function __construct($_db)
    {
        $this->setDb($db);
    }

    public function add(User $subscribe)
    {
        // Préparation de la requête d'insertion.
        // Assignation des valeurs pour les attributs.
        // Exécution de la requête.

    }
    public function delete(User $subscribe)
    {
        // Exécute une requête de type DELETE.
    }

    public function get($id_user)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet User.
    }

    public function getList()
    {
        // Retourne la liste de tous les User.
    }

    public function update(User $subscribe)
    {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
