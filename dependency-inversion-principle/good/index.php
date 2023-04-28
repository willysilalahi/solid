<?php
spl_autoload_register(); 
$payment = new PaymentController(new Midtrans()); 
$payment->pay();