<?php
class Alunno {
  protected $nome;
  protected $cognome;
  protected $eta;

  function __construct($nome,$cognome,$eta) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->eta = $eta;
  }
  function set_nome($nome) {
    $this->nome = $nome;
  }
  function get_nome() {
    return $this->nome;
  }
  function set_cognome($cognome) {
    $this->cognome = $cognome;
  }
  function get_cognome() {
    return $this->cognome;
  }
  function set_eta($eta) {
    $this->eta = $eta;
  }
  function get_eta() {
    return $this->eta;
  }
  public function Stampa() {
    echo $this->nome."\n";
    echo $this->cognome."\n";
    echo $this->eta."\n";
  }
}
?>