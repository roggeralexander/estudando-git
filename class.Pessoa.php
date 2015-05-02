<?php
 # SCRIPT PARA A CRIACAO DA CLASSE PESSOA
 class Pessoa {
   protected $nome;
   protected $idade;
   protected $rg;
   protected $cpf;

   public function setNome($nome) {
   	$this->nome = $nome;
   }

   public function setIdade($idade) {
   	$this->idade = $idade;	
   }

   public function setRG($rg) {
   	$this->rg = $rg;
   }

   public function setCPF($cpf) {
   	$this->cpf = $cpf;
   }

   public function getNome() {
   	return $this->nome;
   }

   public function getIdade() {
   	return $this->idade;
   }

   public function getRG() {
   	return $this->rg;
   }

   public function getCPF() {
   	return $this->cpf;
   }

   public function __toString() {
   	$strMsg = "=============== INFORMAÇÕES RELACIONADAS À PESSOA ============";
	$strMsg.= "Sr(a). " . $this->getNome() . ", de " . $this->getIdade() . ", ";
	$strMsg.= "identificada com CPF nro " . $this->getCPF() . " ";
	$strMsg.= "e RG nro " . $this->getRG();
   }
 }

 # CRIANDO UM OBJETO PARA TESTAR A CLASSE PESSOA
 $objPessoa = new Pessoa();
 $objPessoa->setNome("Rogger Alexander")->setIdade("XXX anos")->setRG("V999999-9")->setCPF("999.999.999-99");
 echo $objPessoa;
 unset($objPessoa);
?>
