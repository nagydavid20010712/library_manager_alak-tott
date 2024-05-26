A projektet a "docker-compose -f docker-compose.caches.yml -f docker-compose.admins.yml -f docker-compose.library_manager.yml -f docker-compose.nginx.yml up --build" parancs kiadásával lehet futtatni.

Sajnos amit nem sikerült megoldanom, hogy a docker-compose honnan olvassa be az .env fájlt. EGyzserűen nem akarta megtalálni, kipróbáltam Windowson is, és ott se szerette volna de az .env meghagytam a projektben és a frontend proxy se akar teljesen működni.
A cronjob-nál van egy kis probléma még, valamiért a mariadb mappának nézi a .log fájlokat így a logok átmásolása se működik teljesen.

A projekt kettő git repoban van fent mert utána kezdtem el szétszedni a docker konténereket kisebb részekre és így azt a változatot külön repo-ba tettem fel.
A másik repo ezen a linken érhető el: https://github.com/nagydavid20010712/library_manager
A másik repot azért linkelem be, hogy önök is megtudják nézni az ott lévő comitokat, de az azóta tovább folytatott projekt ezen a repo-n található.

Az oldalak eléhetőek az alábbi linkeken:
-maga az oldal: http://library.localhost:8000 vagy http://localhost:8000
-phpmyadmin: http://admin.phpmyadmin.localhost:7000 vagy http://localhost:7000
-memcached admin: http://admin.memcached.localhost:8085 vagy http://localhost:8085
-redis-commander: http://admin.redis.localhost:8081 vagy http://localhost:8081

Az oldalra került bejelentkezéz/regisztráció funkció. Alap beépített felhasználót az adatbázis nem tartalmaz és ahhoz, hogy a módosítas, ajánlás és a törlés funkciókat tudjuk használni regisztrálni kell az oldalra.
Bejelentkezés után elérhetőek lesznek a menüben a különböző admin felületek hivatkozásaik iz.

Elvileg mindkettő repo publikus így önök is megtudják nézni minden probléma nélkül.
