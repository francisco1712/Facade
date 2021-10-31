<?php
/* Creamos una interfaz en la que creamos las funciones que nos hagan falta
 */
interface ShareInterface
{
    public function setMessage($message);
    public function share();
    /* public function setSaludar($a); */
}
 
class Twitter implements ShareInterface
{
    private $hola;
    /* private $saludar; */

    public function setMessage($message)
    {
        $this->hola = $message;
    }
 
/*     public function setSaludar($a)
    {
        $this->saludar = $a;
    } */

    public function share()
    {
        echo sprintf('Compartiendo "%s" en Twitter.',$this->hola).PHP_EOL;
        /* echo "Compartiendo ".$this->hola."en Twitter ".$this->saludar."."; */
        echo "<br>";
    }

}
 
class Facebook implements ShareInterface
{
    private $hola;
    /* private $saludar; */

    public function setMessage($message)
    {
        $this->hola = $message;
    }
 


    public function share()
    {
        echo sprintf('Compartiendo "%s" en Facebook.', $this->hola).PHP_EOL;
        echo "<br>";
    }
    
/*     public function setSaludar($a)
    {
    } */
}

 
class Linkedin implements ShareInterface
{
    private $hola;
    /* private $saludar; */

    public function setMessage($message)
    {
        $this->hola = $message;
    }
 
    public function share()
    {
        echo sprintf('Compartiendo "%s" en Linkedin.', $this->hola).PHP_EOL;
        echo "<br>";
    }

/*     public function setSaludar($a)
    {

    } */
}

 
$twitter = new Twitter();
$twitter->setMessage('un Tweet.');
/* $twitter->setSaludar('hola'); */
$twitter->share();

 
$facebook = new Facebook();
$facebook->setMessage('un post.');
$facebook->share();

 
$linkedin = new Linkedin();
$linkedin->setMessage('una oferta de trabajo.');
$linkedin->share();

?>