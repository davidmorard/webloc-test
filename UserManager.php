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
        $q = $this->_db->prepare('INSERT INTO User(pseudo, password, name, first_name, email, status, phone)');
        // Assignation des valeurs pour les attributs.
        $q->bindValue(':pseudo', $subscribe->pseudo());
        $q->bindValue(':password', $subscribe->password(),PDO::PARAM_INT);
        $q->bindValue(':name', $subscribe->name(),PDO::PARAM_INT);
        $q->bindValue(':first_name', $subscribe->first_name(),PDO::PARAM_INT);
        $q->bindValue(':email', $subscribe->email(),PDO::PARAM_INT);
        $q->bindValue(':status', $subscribe->status(),PDO::PARAM_INT);
        $q->bindValue(':phone', $subscribe->phone(),PDO::PARAM_INT);

        // Exécution de la requête.
        $q->execute();

    }
    public function delete(User $subscribe)
    {
        // Exécute une requête de type DELETE.
        $this->_db->exec('DELETE FROM User WHERE id = ' .$subscribe->id());
    }

    public function get($id_user)
    {
        // Exécute une requête de type SELECT avec une clause WHERE, et retourne un objet User.
        $id_user =(int) $id_user;

        $q = $this->_db->query('SELECT id_user, pseudo, password, name, first_name, email, status, phone WHERE id_user =' .$id_user);
        $donnees=$q->fetch(PDO::FETCH_ASSOC);
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))

        return nem $subscribe($donnees);
    }

    public function getList()
    {
        // Retourne la liste de tous les User.
        $subscribes = [];

        $q=$this->_db->query('SELECT id_user, pseudo, password, name, first_name, email, status, phone ORDER BY name');

        while ($donnees=$a->fetch(PDO::FETCH_ASSOC))
        {
            $subscribes[] = new User($donnees);
        }
        return $subscribes;
    }

    public function update(User $subscribe)
    {
        // Prépare une requête de type UPDATE.
        $q=$this->_db->prepare('UPDATE user SET name = :name, first_name=:first_name, email=:email, status=:status, phone=:phone WHERE id_user=:id_user');
        // Assignation des valeurs à la requête.
        $q->bindValue(':name', $subscribe->name(),PDO::PARAM_INT);
        $q->bindValue(':first_name', $subscribe->first_name(),PDO::PARAM_INT);
        $q->bindValue(':email', $subscribe->email(),PDO::PARAM_INT);
        $q->bindValue(':status', $subscribe->status(),PDO::PARAM_INT);
        $q->bindValue(':phone', $subscribe->phone(),PDO::PARAM_INT);
        // Exécution de la requête.
        $q=execute();
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}
