<?php
class User
{
    private $_id_user;
    private $_pseudo;
    private $_password;
    private $_name;
    private $_first_name;
    private $_email;
    private $_status;
    private $_phone;

    // liste des des getters

    public function id_user()
    {
        return $this->_id_user;
    }

    public function pseudo()
    {
        return $this->_pseudo;
    }

    public function password()
    {
        return $this->_password;
    }

    public function name()
    {
        return $this->_name;
    }

    public function first_name()
    {
        return $this->_first_name;
    }

    public function email()
    {
        return $this->_email;
    }

    public function status()
    {
        return $this->_status;
    }

    public function phone()
    {
        return $this->_phone;
    }

    // Liste des setters

    public function setId_user($id_user)
    {
        // On verifie que id_user soit un nombre entier.

        $id_user = (int) $id_user;

        // On vérifie ensuite si ce nombre est strictement positif.

        if ($id_user > 0)
        {
            // Si c'est le cas, c'est tout bon, on assigne la valeur à l'attribut correspondant.
            $this->_id_user = $id_user;
        }
    }

    public function setPseudo($pseudo)
    {
        if (is_string($pseudo))
        {
            $this->_pseudo = $pseudo;
        }
    }
    public function setPassword()
    {
        if (is_string($password))
        {
            $this->_password = $password;
        }

    }
    public function setName()
    {
        if (is_string($name))
        {
            $this->_name = $name;
        }
    }
    public function setFirstName()
    {
        if (is_string($first_name))
        {
            $this->_first_name = $first_name;
        }
    }
    public function setEmail()
    {
        if (is_string($email))
        {
            $this->_email = $email;
        }
    }
    public function setStatus()
    {
        if (is_string($status))
        {
            $this->_status = $status;
        }
    }
    public function setPhone()
    {
        if (is_string($phone))
        {
            $this->_phone = $phone;
        }
    }

}
