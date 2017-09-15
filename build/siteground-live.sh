cd ~/rossedlin.com/
echo "Install -> laravel-stage.rossedlin.com"

#Cleanup
rm -R -f old_www
rm -R -f www.rossedlin.com-laravel

#Git
git clone -b master https://bitbucket.org/cuttingweb/www.rossedlin.com-laravel

if [ -d ~/rossedlin.com/www.rossedlin.com-laravel ]; then

    #Composer
    cd ~/rossedlin.com/www.rossedlin.com-laravel
    composer install
    composer update

    #Environment File
    cd ~/rossedlin.com/
    cp ~/rossedlin.com/www/.env ~/rossedlin.com/www.rossedlin.com-laravel/.env

    #Folders
    cd ~/rossedlin.com/
    mv www old_www
    mv www.rossedlin.com-laravel www

    #Permissions
    chmod 755 -R ~/rossedlin.com/www

fi