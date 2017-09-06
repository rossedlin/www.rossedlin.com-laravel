cd ~/rossedlin.co.uk/
echo "Install -> laravel-stage.rossedlin.co.uk"

#Cleanup
rm -R -f old_laravel-stage
rm -R -f www.rossedlin.co.uk-laravel

#Git
git clone -b stage https://bitbucket.org/rossedlin/www.rossedlin.co.uk-laravel

if [ -d ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel ]; then

    #Composer
    cd ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel
    composer install

    #Environment File
    cd ~/rossedlin.co.uk/
    cp ~/rossedlin.co.uk/laravel-stage/.env ~/rossedlin.co.uk/www.rossedlin.co.uk-laravel/.env

    #Folders
    cd ~/rossedlin.co.uk/
    mv laravel-stage old_laravel-stage
    mv www.rossedlin.co.uk-laravel laravel-stage

    #Permissions
    chmod 755 -R ~/rossedlin.co.uk/laravel-stage

fi