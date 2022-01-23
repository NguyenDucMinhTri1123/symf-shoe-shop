# symf-shoe-shop
# run project
 symfony server:start
# set up database(open xampp and run mysql):
1. php bin/console make:migration
2. php bin/console doctrine:migrations:migrate 
3. enter until finish (2 times)
4. php bin/console make:entity --regenerate
5. App\Entity
6. done
