cd ~/rossedlin.co.uk/
echo "Install -> laravel-dev.rossedlin.co.uk"

#Cleanup
rm -R -f old_laravel-dev
rm -R -f www.rossedlin.co.uk-laravel

#Git
git clone -b dev https://bitbucket.org/cuttingweb/www.rossedlin.com-laravel

if [ -d ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel ]; then

    #Composer
    cd ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel
    composer install

    #Environment File
    cd ~/rossedlin.co.uk/
    cp ~/rossedlin.co.uk/laravel-dev/.env ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel/.env

    #Folders
    cd ~/rossedlin.co.uk/
    mv laravel-dev old_laravel-dev
    mv www.rossedlin.co.uk-laravel laravel-dev

    #Permissions
    chmod 755 -R ~/rossedlin.co.uk/laravel-dev

fi