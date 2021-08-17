BENVENUTI IN QUOTATION MANAGER

Linee guida per l'installazione del progetto

1. scaricare il progetto da GitHub al link https://github.com/AndreaMin94/jobtech
2. Una volta scaricato il progetto, entriamo nella cartella tramite il comando cd jobtech
3. Lanciare il comando cp .env.example .env . Questo comando copierà il contenuto del file .env.example in un nuovo file chiamato .env . Questo file contiene le configurazioni principali del progetto tra cui la configurazione del database. 
4. Dopo aver creato il file .env , lanciamo dalla console il comando composer install. Questo comando serve ad installare tutte le dipendenze PHP che servono al progetto per essere lanciato
5. Lanciamo il comando php artisan key:generate che creerà una chiave per la nostra applicazione
6. Passiamo adesso a compilare gli asset che servono per le librerie di frontend utilizzate nel progetto tramite il comando npm install && npm run dev che installerà le dipendenze CSS e JS e le compilerà

7. Prima di avviare il progetto bisogna creare il database MySQL. Creiamo il database di nome laravel ( il nome standard che troviamo nella configurazione ) e procediamo alla compilazione del file .env con la configurazione della connessione al db:
    
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=your_mysql_username
DB_PASSWORD=your_mysql_password

8. Dopo aver configurato il file .env, passiamo alla creazione dei dati per inizializzare il progetto.
Lanciamo quindi il comando php artisan migrate --seed . Questo comando creerà le tabelle nel database collegato al progetto, 10 Quotation fake e un utente con privilegi admin che potrà accedere alla sezione amministrativa del sito. Le credenziali dell'utente admin sono:
email: admin@admin.com
pwd : 12345678

9. Per poter far partire il sito, lanciamo il comando php artisan serve che aprirà un server all'indirizzo http://127.0.0.1:8000

10. Apriamo un qualsiasi browser e digitiamo l'indirizzo http://127.0.0.1:8000


Linee guida per l'utilizzo del sito

Nella Home page troviamo una semplice landing page con Navbar, sezioni informative e footer con contatti e mappa. 
Nella navbar troviamo il link "Chi Siamo" che porta ad una pagina con una breve descrizione dell'azienda e le due action Login e Register. 
Facendo il login con le credenziali dell'account amministratore possiamo accedere alla sezione amministrativa tramite la call to action "Admin" presente nella Navbar.

Linee guida per la sezione admin

Il primo componente che vediamo nella sezione admin è un form per inserire una nuova Quotation.
I 3 campi richiesti sono Nome del cliente, Totale e Note per il preventivo. I 3 campi sono obbligatori. Il nome del cliente deve essere lungo almeno 3 caratteri. Il totale deve essere maggiore di €1.00. Le note devono essere lunghe almeno 3 caratteri. Qualora queste regole non fossero rispettate, il form mostrerebbe l'errore e non procederebbe alla creazione della Quotation. Sotto il form sono posizionati due bottoni: Crea e Pulisci. Con il primo lanciamo il comando per creare una nuova Quotation, il secondo serve a ripulire gli input. 


Il secondo componente è una tabella che mostra le Quotation presenti nel database dal più recente al più vecchio impaginati per 5 alla volta. Proprio sopra la tabella si trova un input che permette di cercare una Quotation in base al nome del cliente. Sotto l'input troviamo un bottono con la scritta pulisci che cancella ciò che abbiamo scritto nell'input di ricerca. 
Per ogni Quotation all'interno della tabella troviamo due call to action: Modifca ed Elimina. Cliccando sul bottone Elimina, la Quotation verrà eliminata e la tabella si aggiornerà con tutte le Quotation rimaste. Cliccando sul bottone Modifica, il form in alto verrà popolato con le informazioni della Quotation che abbiamo scelto e saremo in grado di rieditare e di modificare la Quotation. 


STRUTTURA
 
La struttura del progetto è semplice.
A livello logico c'è un solo modello: Quotation. 
Quotation ha solo 3 attributi: customer, total e notes. Le sue istanze sono salvate dalla tabella quotations nel database MySQL. 

Le azioni possibili su questo modello: Create, Read, Delete e Update, sono gestite da una classe repository QuotationRepository che implementa un'interfaccia QuotationRepositoryInterface.

La pagina Admin è gestita tramite il framework Livewire che permette di poter creare SPA tramite chiamate AJAX implicite.