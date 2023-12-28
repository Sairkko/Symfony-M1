Créer un .env.local et ajouter ceci

```
# bdd Windows
# DATABASE_URL="mysql://root:root@127.0.0.1:3306/M1-Symfony"

# bdd Mac
# DATABASE_URL="mysql://root:root@127.0.0.1:8889/Symfony"
```

Faire un composer install et npm install.

Créer la bdd :
```
php bin/console d:d:c
```

Faire les migrations :
```
php bin/console d:s:u --force
```
