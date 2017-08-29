cd ~/cuttingweb.co.uk/
echo "Install -> laravel-dev.cuttingweb.co.uk"

#Cleanup
rm -R -f old_laravel-dev
rm -R -f www.cuttingweb.co.uk-laravel

#Git
git clone https://bitbucket.org/cuttingweb/www.cuttingweb.co.uk-laravel

if [ -d ~/cuttingweb.co.uk/www.cuttingweb.co.uk-laravel ]; then

    #Composer
    cd ~/cuttingweb.co.uk/www.cuttingweb.co.uk-laravel
    composer install

    #Folders
    cd ~/cuttingweb.co.uk/
    mv laravel-dev old_laravel-dev
    mv www.cuttingweb.co.uk-laravel laravel-dev

    #Permissions
    chmod 755 -R ~/cuttingweb.co.uk/laravel-dev

fi