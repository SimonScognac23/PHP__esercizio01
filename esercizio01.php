<?php

/*  Crea una classe Company che abbia i seguenti attributi pubblici:
name: nome dell’azienda;
location: stato in cui e' ubicata la sede dell’azienda;
tot_employees: numero di dipedenti assunti in quella sede (di default, 0);
Crea 5 istanze di 5 aziende diverse
Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendendi, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;
Implementa un nuovo metodo che, per ogni oggetto Company istanziati, calcoli la spesa annuale e la stampi per ogni oggetto.
Implementa un nuovo metodo che e' in grado di calcolare l’insieme totale delle spese di tutte le aziende create.
Implementa un metodo statico che permetta di stampare a terminale questo totale assoluto di tutte le aziende messe insieme.*/












class Company {

    public $name;
    public $location;
    public $tot_employees;  

    public static $avg_salary = 1500;  // attributo statico 
    public static $total = 0;          // attributo statico

    // Costruttore per inizializzare gli attributi
    public function __construct($nome, $sede, $dipendenti) {
        $this->name = $nome;
        $this->location = $sede;
        $this->tot_employees = $dipendenti;  
    }









// metodo che accetta 2 parametri in ingresso (parametri formali) e li confronta
    public function checkIfGreater($int1, $int2){
        if ($int1 > $int2){
            return true;
        }
        return false;
    }

    // Metodo per controllare il numero di dipendenti
    public function printCheckEmployees($num = 0) {  //parametro in entrata $num = 0 impostato di default
        if ($this->checkIfGreater($this->tot_employees, $num)) {  // richiamamo il metodo che abbiamo appena creato e avra come parametri reali $this->totemplyes(tot dipendenti) e il secondo parametro il nostro parametro formale $num che vale 0
            echo "L'azienda {$this->name} con sede in {$this->location} ha ben {$this->tot_employees} dipendenti.\n";
        } else {
            echo "L'azienda {$this->name} con sede in {$this->location} non ha abbastanza dipendenti.\n";
        }
    }









    // Metodo per calcolare il costo annuale basato sul numero di dipendenti
    public function calculateAnnualCost($int) {   // parametro in ingresso
        return $this->tot_employees * (self::$avg_salary * $int);  // questa funzione ha come valore di ritorno il numero di dipendenti moltiplicato per l'attributo statico average salary moltiplicato a sua volta per il parametro formal ein ingresso quindi $int
    }

    // Metodo per stampare il costo annuale per ogni azienda che avra in ingresso month con valore 12
    public function printCalculatedAnnualCost($month = 12) {
        echo "-------{$this->name}----------\n";
        echo "Il costo annuale dell'ufficio {$this->name} è di " . $this->calculateAnnualCost($month) . " euro.\n";  // parametro in ingresso $month che vale 12
    }













    // Metodo per calcolare il costo progressivo (sommando alle spese totali)
    public function calculateProgressiveCost($month = 12) {
        return self::$total += $this->calculateAnnualCost($month);  // attributo total sommato a se stesso  piu la nostra funzione precedente con ingresso $month che vale 12
    }

    // Metodo statico per stampare il totale complessivo delle spese
    public static function printCalculatedFinalTotal() {
        echo "La holding ha una previsione di spesa pari a: " . self::$total . " euro.\n";
    }

}












// Creazione di istanze e test

$company1 = new Company('Aulab', 'Italia', 50);
$company1->printCheckEmployees();  

$company2 = new Company('Nintendo', 'Giappone', 5);
$company2->printCheckEmployees();  

$company2->calculateProgressiveCost();  
$company1->calculateProgressiveCost();  

$company1->printCheckEmployees(); 
$company1->printCalculatedAnnualCost();  


Company::printCalculatedFinalTotal(); 

?>
