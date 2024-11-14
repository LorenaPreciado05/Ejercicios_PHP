<?php
//declare(strict_types=1);//clases con tipados
//clases y objetos
 $sale =new Sale(date("Y-m-d"));
 $onlineSale =new OnlineSale( date("Y-m-d"),"tarjeta");//herencia
 $concept = new Concept("cerveza", 10);//clases con tipados - encapsulamiento
 $concept2 = new Concept("cerveza 2", 30.10);//clases con tipados - encapsulamiento
 $sale -> addConcept($concept);// Encampsulamiento
$sale -> addConcept($concept2); // Encampsulamiento
 echo $sale -> getTotal();// Encampsulamiento
echo  $sale -> getDate(); //metodos getter and setter
echo  $sale -> getDate(); //metodos getter and setter
//echo  $onlineSale -> createInvoice();//herencia
//echo $onlineSale -> showInfo();//herencia
 //$sale->addConcept($concept);//clases con tipados
 //print_r($sale->concepts);//clases con tipado

 echo Sale::$count." ";
 Sale::reset();
 echo Sale::$count;
 //echo gettype($sale->total);//clases con tipados
 //$sale -> createInvoice();
 class Sale{
     protected $total;
     public $date;
     private $concepts;//clases con tipado
     //metodos estaticos
     public static $count;
     //constructor
     public function __construct( string $date){
      $this ->date = $date;
      $this -> total = 0;
      $this -> concepts=[];
      self::$count++;
     }
     public function addConcept(Concept $concept)//clases con tipado - encapsulamiento
     {
         $this -> concepts[] = $concept;
         $this -> total += $concept ->mont;// Encampsulamiento
     }
     public function  getTotal(): float// Encampsulamiento - getter
     {
         return $this ->total;
     }// Encampsulamiento
     public  function getDate(): string
     {
         return $this -> date;
     }
     public function setDate(string $date)
     {
         if (strlen($date) > 10 ){
             return "la fecha es incorrecta";
         }
     }
     public static function reset()
     {

     }
     // destructor
     public function __destruct()
     {
       //  echo "<br> se ha eliminado un objeto";
     }
     //metodos
     public function createInvoice(): string{
         return "se crea la factura";
     }
 }
 class  onlineSale extends Sale // herencia
 {
     public $paymentMethod;
     public function __construct( string $date,
     string $paymentMethod)
     {
         parent::__construct($date);
         $this -> paymentMethod = $paymentMethod;
     }
     public function showInfo(): string
     {
         return "<br> La venta tiene un valor de:  $this->total";
     }
 }//herencia
 class Concept//clases con tipado
 {
     public $description;
     public  $mont;
     public function __construct(string $description, $mont) {
         if (!is_int($mont) && !is_float($mont)) {//Union types
             throw new InvalidArgumentException('El parámetro $mont debe ser un entero o un flotante.');
         }
         $this->description = $description;
         $this->mont = $mont;
     }//union types
 }