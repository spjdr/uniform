Uniform
===============

A distinctive MediaWiki skin for SPJDRpedia based on the MediaWiki Vector skin.

## Adding uniform to your wiki

Clone this repository into the skins subfolder of your MediaWiki directory. If you use git, you can do it with the line

    git clone git://github.com/spjdr/uniform.git

Then add the following line to LocalSettings.php.

    require_once("$IP/skins/uniform/Uniform.php");

Uniform should then be added to the list of possible skins available to users in their private settings. You can also choose to set Uniform as the defualt skin by adding the line,

    $wgDefaultSkin = 'uniform';

## Til udviklere

### Stylesheets og JavaScripts

Det eneste relevante stylesheet er **stylesheets/screen.css**.

Man loader javascript og stylesheets via MediaWikis ResourceLoader. Det gør man ved at tilføje styles og scripts til arrayet i Uniform.php. Indtil videre inkluderes kun **stylesheets/screen.css**, **scripts/uniform.js** samt nogle generelle styles fra **common**.

(Bemærk at print-stylen inkluderes automatisk).

### Templates

Templaten bestemmes af **Uniform.skin.php**. Udgangspunktet er Vector-templaten, men alt kan ændres. Ender vi med at have samme template som Vector, kan vi forsimple koden (og lette overgangen ved opdateringer af MediaWiki) ved at arve templaten direkte fra Vector skin.

Vi har modificeret templaten så søgefeltet nu er flyttet over i sidebaren og styres af artiklen Mediawiki:Sidebar. Indtast **SEARCH** på sin egen linje for at indsætte et søgefelt i sidebaren. Vær også opmærksom på at sidebaren caches, så ændringerne ikke dukker op lige med det samme.

Derudover er de personlige værktøjer sat lidt anderledes op. Alt der ikke er link til egen side og login/logout ligger nu i en underliste.

### Images

Alle billeder bør ligges i folderen **images/**. Læg kun billeder der er nødvendige for skinnet.

Vi har indført [GPlay mønstret af Dimitrie Hoekstra fra subtlepatterns.com](http://subtlepatterns.com/gplay/), som en fin baggrund til siden. Mønstret er licenseret under CC-BY-SA 3.0.

### Fonte

Vi bruger fontene Bitter og Istok fra fontsquirrel.com. Bitter er til overskrifter og Istok er til brødtekst.



... Happy skin hacking!
