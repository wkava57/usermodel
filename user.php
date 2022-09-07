<?php

class user{
    private int $id;
    private string $username;
    private string $mail;
    private string $password;
    private array $playlists = [];

    public function __construct(int $id, string $username, string $mail, string $password){
        $this->id = $id;
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
        
    }

    public function getId(): int{
        return $this->id;
    }
    public function setId(int $id): void{
        $this->id = $id;
    }

    public function getUserName(): string{
        return $this->iusername;
    }
    public function setUserName(string $iusernamed): void{
        $this->username = $username;
    }

    public function getMail(): string{
        return $this->mail;
    }
    public function setMail(string $mail): void{
        $this->mail = $mail;
    }

    



    public function ajouterPlaylists(Object $playlists){
        // empile un ou plusieurs éléments à la fin d'un tableau
        // array_push($this->playlists, $playlist);
        $this->playlists[] = $playlist;
        
    }    
    public function getPlaylists(){
        return $this->getPlaylists;
    }



}