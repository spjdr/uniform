Uniform
===============

A distinctive MediaWiki skin for SPJDRpedia based on the MediaWiki Vector skin.


## Til Udviklere


### Stylesheets og JavaScripts

Det eneste relevante stylesheet er **stylesheets/screen.css**.

Man loader javascript og stylesheets via MediaWikis ResourceLoader. Det gør man ved at tilføje styles og scripts til arrayet i Uniform.php. Indtil videre inkluderes kun **stylesheets/screen.css**, **scripts/uniform.js** samt nogle generelle styles fra **common**.

(Bemærk at print-stylen inkluderes automatisk).

### Templates

Templaten bestemmes af **Uniform.skin.php**. Udgangspunktet er Vector-templaten, men alt kan ændres. Ender vi med at have samme template som Vector, kan vi forsimple koden (og lette overgangen ved opdateringer af MediaWiki) ved at arve templaten direkte fra Vector skin.

### Images

Alle billeder bør ligges i folderen **images/**. Læg kun billeder der er nødvendige for skinnet.


... Happy skin hacking!
