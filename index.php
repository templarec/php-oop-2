<?php
require 'paymentMethods.php';
require 'user.php';

require 'products.php';
require 'magazzino.php';


$lorenzo = new User('Lorenzo', 'Bernini', '17/07/1986', 'via ciccio 22', 'BRNLNZ86L17G224G');


//simple echo table
echo "
<table>
<thead>
<tr>
<th>Nome</th><th>Cognome</th><th>Data di nascita</th><th>indirizzo</th><th>CF</th>
</tr>
</thead>
<tr>
<td>".$lorenzo->getNome()."</td><td>".$lorenzo->getCognome()."</td><td>".$lorenzo->getDataDiNascita()."</td><td>".$lorenzo->getIndirizzo()."</td><td>".$lorenzo->getCodiceFiscale()."</td>
</tr>
</table>
";
//payment method

$lorenzo->setPaymentMethod('VISA', '20/20/2022', '555', '1452745898563256');
try {
    echo "Validità metodo di pagamento: " . $lorenzo->verifyPayment();
} catch (Exception $e) {
    echo "Errore! " . $e->getMessage();
}

$item1 = new magazzino();
$item1->setId(1);
$item1->setDescrizione('Tv Samsung 25');
$item1->setPrezzo('340');
$item1->setQuantita('900');

var_dump($item1->productInfo());


