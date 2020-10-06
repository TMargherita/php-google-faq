<!--question-->
<?php

  $questions = [
    [
      "title" =>"Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
      "text" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi."
    ],
    [
      "title" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
      "text" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.

      Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo."
    ],
    [
      "title" => "Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?",
      "text" => "I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."
    ],
    [
      "title" => "Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?",
      "text" => "In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. "
    ]

  ];


 ?>



<!--parte grafica html-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>Google Faq</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="column">
            <div class="logo">
              <img src="img/googlelogo_color_74x24dp.png" alt="">
              <span class="top"> Privacy e termini </span>
            </div>
          </div>
        </div>
      </div>
      <div class="container top-menu">
        <div class="row">
          <div class="double-column">
            <div class="column">
              <div class="menu">Introduzione</div>
            </div>
            <div class="column">
              <div class="menu">Norme sulla privacy</div>
            </div>
            <div class="column">
              <div class="menu">Termini di Servizio</div>
            </div>
            <div class="column">
              <div class="menu">Tecnologie</div>
            </div>
            <div class="column">
              <div class="menu">
                <span class="domande">Domande frequenti</a>
              </div>
            </div>
          </div>
          <div class="double-column">
            <div class="column">
              <div class="utente">
                <span class="iniziale">M</span>
                <span class="email">
                margherita.testi@gmail.com
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <ul class="questions">
          <?php foreach ($questions as $question) { ?>
            <li class="titolo-domande">
              <?php echo $question["title"]?></li>
            <li class="testo-risposte"><?php echo $question["text"]?>></li>
            <?php } ?>
        </ul>
      </div>
    </main>
  </body>
</html>
