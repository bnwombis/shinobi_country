php artisan breeze:install
npm install && npm run dev
cp .env.example .env
edit DB credentials in .env
php artisan key:generate
php artisan migrate
php artisan db:seed
put GeoLite2-Country.mmdb to storage/app/geoip/ folder
you can download geolite db from  https://shnb.t2l.lol/GeoLite2-Country.mmdb
