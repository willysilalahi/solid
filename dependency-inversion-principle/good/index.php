<?php
spl_autoload_register();
$payment = new PaymentController(new Doku());
$payment->pay();
