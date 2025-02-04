Nel mio codice, ho creato una classe chiamata Company, che rappresenta un'azienda. Ogni oggetto della classe ha tre attributi principali:

$name: il nome dell'azienda (ad esempio, "Aulab").
$location: la sede dell'azienda (ad esempio, "Italia").
$tot_employees: il numero di dipendenti presenti in quella sede, che di default è impostato a 0.
Questi attributi vengono inizializzati tramite un costruttore che prende come parametri il nome, la sede e il numero di dipendenti, creando così un'istanza specifica per ogni azienda.

1. Controllo dei dipendenti
Ho implementato un metodo chiamato printCheckEmployees(), che stampa un messaggio a terminale in base al numero di dipendenti di ogni azienda. Se il numero di dipendenti è maggiore di 0, il programma stampa qualcosa come:

"L'azienda Aulab con sede in Italia ha ben 50 dipendenti." Se invece l'azienda non ha dipendenti, viene stampato: "L'azienda Aulab con sede in Italia non ha abbastanza dipendenti."

Per fare questo controllo, ho utilizzato un metodo di supporto (checkIfGreater()), che prende due numeri come parametri e restituisce true se il primo numero è maggiore del secondo, altrimenti false.

2. Calcolo della spesa annuale
Ho anche implementato un metodo per calcolare la spesa annuale di ogni azienda. Questo calcolo si basa sul numero di dipendenti dell'azienda e sul salario medio, che ho definito come una variabile statica chiamata $avg_salary (1500€ al mese). Il metodo calculateAnnualCost() restituisce la spesa annuale, moltiplicando il numero di dipendenti per il salario medio, e successivamente per il numero di mesi (12, nel mio caso).

Inoltre, ho creato un altro metodo (printCalculatedAnnualCost()), che stampa la spesa annuale per ogni azienda in base al numero di dipendenti e al salario medio.

3. Calcolo del totale delle spese
Un altro passo che ho fatto è stato implementare un metodo per calcolare le spese totali di tutte le aziende. Questo metodo somma la spesa annuale di ogni azienda alla spesa complessiva totale, che viene mantenuta in una variabile statica chiamata self::$total.

4. Stampa del totale complessivo delle spese
Infine, ho creato un metodo statico (printCalculatedFinalTotal()), che stampa a terminale il totale delle spese per tutte le aziende create. Essendo un metodo statico, posso chiamarlo direttamente sulla classe, senza dover creare un oggetto specifico.

5. Test e creazione delle aziende
Per testare il codice, ho creato cinque istanze di aziende diverse. Ad esempio:

Un'azienda chiamata "Aulab" con sede in Italia e 50 dipendenti.
Un'altra azienda chiamata "Nintendo" con sede in Giappone e 5 dipendenti.
Per ogni azienda, ho chiamato il metodo printCheckEmployees() per verificare il numero di dipendenti e ho calcolato la spesa annuale tramite printCalculatedAnnualCost(). Inoltre, ho chiamato il metodo statico printCalculatedFinalTotal() per visualizzare la somma totale delle spese di tutte le aziende.


------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


In my code, I created a class called Company, which represents a company. Each object of the class has three main attributes:

$name: the name of the company (e.g., "Aulab").
$location: the location of the company's headquarters (e.g., "Italy").
$tot_employees: the number of employees at that location, which is set to 0 by default.
These attributes are initialized through a constructor that takes the name, location, and number of employees as parameters, thus creating a specific instance for each company.

1. Employee Check
I implemented a method called printCheckEmployees(), which prints a message to the terminal based on the number of employees of each company. If the number of employees is greater than 0, the program prints something like:

"The company Aulab located in Italy has 50 employees."

If the company has no employees, it prints:

"The company Aulab located in Italy does not have any employees."

To perform this check, I used a helper method (checkIfGreater()), which takes two numbers as parameters and returns true if the first number is greater than the second, otherwise false.

2. Calculating Annual Expenses
I also implemented a method to calculate the annual expenses of each company. This calculation is based on the number of employees and the average salary, which I defined as a static variable called $avg_salary (1500€ per month). The method calculateAnnualCost() returns the annual expenses by multiplying the number of employees by the average salary, and then by the number of months (12, in my case).

Additionally, I created another method (printCalculatedAnnualCost()), which prints the annual expense for each company based on the number of employees and the average salary.

3. Calculating Total Expenses
Another step I took was to implement a method to calculate the total expenses for all companies. This method sums the annual expenses of each company to a cumulative total, which is stored in a static variable called self::$total.

4. Printing the Total Expenses
Finally, I created a static method (printCalculatedFinalTotal()), which prints the total expenses for all the companies created to the terminal. Since it's a static method, I can call it directly on the class without needing to create a specific object.

5. Testing and Creating Companies
To test the code, I created five instances of different companies. For example:

A company called "Aulab" located in Italy with 50 employees.
Another company called "Nintendo" located in Japan with 5 employees.
For each company, I called the method printCheckEmployees() to check the number of employees, and I calculated the annual expense using printCalculatedAnnualCost(). Additionally, I called the static method printCalculatedFinalTotal() to display the total expenses for all companies.

