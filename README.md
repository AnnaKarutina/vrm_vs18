# Lühiülevaade programmeerimiskeeltest ja veebiraamistikest - Booking App rakenduse loomine Symfony 4 raamistiku abil
====================================================

## Ettevalmistus - server + symfony projekt + git

On olemas Linux-laadse operatsioonisüsteemiga server, millel on võimalus installeerida ja seadistada kõik allpool toodud tarkvara ja teenuseid. Antud kursusel oli kasutatud Ubuntu 18.04 Desctop või Ubuntu 18.04 Server operatsioonisüsteemid, mille emulleerimine toimus virtualiseeritud keskkonnas (Oracle Virtual Box või vCenter)

### Vajalik tarkvara

Tuleb paigaldada järgmine tarkvara:

* php
```
sudo apt-get install php7.2-cli
sudo apt-get install php7.2-xml
```

* [composer](https://getcomposer.org/download/)
```
sudo apt-get install composer
```

* Symfony
```
wget https://get.symfony.com/cli/installer -O - | bash
sudo mv /home/anna/.symfony/bin/symfony /usr/local/bin/symfony
```

### Kontrollime, kas antud arvuti vastab raamistiku nõuetele
```
symfony check:requirements
```

### Symfony projekti loomine composeri abil ja algtestimine 

```
composer create-project symfony/website-skeleton projekti_nimi
cd projekti_nimi/
symfony server:start
```

Veebilehitsejal ava aadressi [http://localhost:8000/](http://localhost:8000/). Kui kõik on korras, pead nägema tutvumislehe. Serveri töö peatamiseks tuleb kasutada klahvide kombinatsiooni Ctrl+C käsureal terminalis.

### git
Konfigureeri oma git parameetrid:
```
git config --global user.email "nimi@email"
git config --global user.name "Sinu Nimi"
```

Initsialiseeri lokaalne repositoorium:
```
cd projekti_nimi # kui veel ei ole teinud
git init
```

Loo kaugrepositoorium, kasutades näiteks [https://github.com](https://github.com). Ühenda lokaalne repositoorium kaugrepositooriumiga:
```
git remote add origin https://github.com/kasutajanimi/reponimi.git
```
Lisa vajalikud failid jälgimisele, loo vastav commit ning push-i kõik kaugrepositooriumi:
```
git add .
git commit -m "Add framework files"
git push -uf origin master
```

### symfony raamistiku kasutamise reeglid
* Loo route ehk URL sinu lehele (tee): selleks failist config/routes.yaml defineeri tee, mis soovid kasutada.
* Loo kontroller - see on funktsioon, mis valmib sinu lehe.

### Suuna ehk Route määramisvõimalused
Kui ei soovi iga kord routes.yaml failis suunad kirjeldada, kasuta anatatsioonid:
```
composer require annotations
```
ja koodis rakenda nii:
```
// ...
use Symfony\Component\Routing\Annotation\Route;

class SinuController
{
+     /**
+      * @Route("/tee/antud/kontrollerini")
+      */
```