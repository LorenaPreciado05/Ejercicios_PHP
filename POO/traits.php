<?php
//reutilizar codigo
 trait EmailSender
 {
     public function sendEmail()
     {
         echo "se envia un email <br>";
     }
 }
 trait BD
 {
     public function save()
     {
         echo "se guarda en la base de datos <br>";
     }
 }
 trait Log
 {
     public function log(string  $message, string $fileName)
     {
         if (!file_exists($fileName)){
             file_put_contents($fileName, "");
         }
         $current = file_get_contents($fileName);
         $current .= date ("Y-m-d H:i:s"). " - ". $message. "\n";
         file_put_contents($fileName, $current);
     }
 }
 class Invoice
 {
     use EmailSender, BD, log;
     public function create()
     {
         echo "se crea la facturalcion <br>";
         $this->log("se creo la factura", "log.txt");
     }
 }

 $invoice = new Invoice();
 $invoice -> sendEmail();
 $invoice -> save();
 $invoice->create();