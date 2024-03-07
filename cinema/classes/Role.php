<?php

class Role {
  private string $nomRole;

public function __construct(
  string $nomRole,
  ) {
    $this->nomRole = $nomRole;
  }

  //////////GETTERS & SETTERS//////////////
  
  public function getNomRole()
  {
    return $this->nomRole;
  }
  public function setNomRole($nomRole)
  {
    $this->nomRole = $nomRole;
  }

  
}