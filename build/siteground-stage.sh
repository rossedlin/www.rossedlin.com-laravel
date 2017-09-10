cd ~/rossedlin.com/
echo "Install -> laravel-stage.rossedlin.com"

#Cleanup
rm -R -f old_laravel-stage
rm -R -f www.rossedlin.com-laravel

#Git
git clone -b stage https://bitbucket.org/cuttingweb/www.rossedlin.com-laravel

if [ -d ~/rossedlin.com/www.rossedlin.com-laravel ]; then

    #Composer
    cd ~/rossedlin.com/www.rossedlin.com-laravel
    composer install
    composer update

    #Environment File
    cd ~/rossedlin.com/
    cp ~/rossedlin.com/laravel-stage/.env ~/rossedlin.com/www.rossedlin.com-laravel/.env

    #Folders
    cd ~/rossedlin.com/
    mv laravel-stage old_laravel-stage
    mv www.rossedlin.com-laravel laravel-stage

    #Permissions
    chmod 755 -R ~/rossedlin.com/laravel-stage

    #Robots.txt
    cd ~/rossedlin.com/laravel-stage
    cp ./build/robots-dev.txt ./public/robots.txt

fi