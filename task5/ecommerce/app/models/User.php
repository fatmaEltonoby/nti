<?php
namespace app\models;
use app\database\connection;
use app\database\contracts\crud;

class user extends connection implements crud{
    private $id,$name_ar,$name_en,$image,$phone,$email,$password,$gender,
    $email_verified_at,$verification_code,$code_expiration,$remember_token,
    $status,$created_at,$updated_at;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name_ar
     */ 
    public function getName_ar()
    {
        return $this->name_ar;
    }

    /**
     * Set the value of name_ar
     *
     * @return  self
     */ 
    public function setName_ar($name_ar)
    {
        $this->name_ar = $name_ar;

        return $this;
    }

    /**
     * Get the value of name_en
     */ 
    public function getName_en()
    {
        return $this->name_en;
    }

    /**
     * Set the value of name_en
     *
     * @return  self
     */ 
    public function setName_en($name_en)
    {
        $this->name_en = $name_en;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of email_verified_at
     */ 
    public function getEmail_verified_at()
    {
        return $this->email_verified_at;
    }

    /**
     * Set the value of email_verified_at
     *
     * @return  self
     */ 
    public function setEmail_verified_at($email_verified_at)
    {
        $this->email_verified_at = $email_verified_at;

        return $this;
    }

    /**
     * Get the value of verification_code
     */ 
    public function getVerification_code()
    {
        return $this->verification_code;
    }

    /**
     * Set the value of verefication_code
     *
     * @return  self
     */ 
    public function setVerification_code($verification_code)
    {
        $this->verefication_code = $verification_code;

        return $this;
    }

    /**
     * Get the value of code_expiration
     */ 
    public function getCode_expiration()
    {
        return $this->code_expiration;
    }

    /**
     * Set the value of code_expiration
     *
     * @return  self
     */ 
    public function setCode_expiration($code_expiration)
    {
        $this->code_expiration = $code_expiration;

        return $this;
    }

    /**
     * Get the value of remember_token
     */ 
    public function getRemember_token()
    {
        return $this->remember_token;
    }

    /**
     * Set the value of remember_token
     *
     * @return  self
     */ 
    public function setRemember_token($remember_token)
    {
        $this->remember_token = $remember_token;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function create(){
        $query=" INSERT INTO `users` ('name_ar','name_en','email','phone','password','verification_code')
         VALUES ('{$this->name_ar}','{$this->name_en}','{$this->email}','{$this->phone}','{$this->password}',{$this->verification_code})";
        //  echo $query; die;
        return $this->runDML($query);

    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }

    public function getUserByEmail()
    {
        $query = "SELECT * FROM `users` WHERE `email` = '{$this->email}'";
        return $this->runDQL($query);
    }

    public function getUserByPhone()
    {
        $query = "SELECT * FROM `users` WHERE `phone` = '{$this->phone}'";
        return $this->runDQL($query);
    }
}