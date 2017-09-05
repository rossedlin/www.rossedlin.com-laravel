cd ~/rossedlin.co.uk/
echo "Install -> laravel-staging.rossedlin.co.uk"

#Cleanup
rm -R -f old_laravel-staging
rm -R -f www.rossedlin.co.uk-laravel

#Git
git clone -b staging https://bitbucket.org/rossedlin/www.rossedlin.co.uk-laravel

if [ -d ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel ]; then

    #Composer
    cd ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel
    composer install

    #Environment File
    cd ~/rossedlin.co.uk/
    cp ~/rossedlin.co.uk/laravel-staging/.env ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel/.env

    #Folders
    cd ~/rossedlin.co.uk/
    mv laravel-staging old_laravel-staging
    mv www.rossedlin.co.uk-laravel laravel-staging

    #Permissions
    chmod 755 -R ~/rossedlin.co.uk/laravel-staging

fi