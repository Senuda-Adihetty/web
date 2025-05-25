run project local host - php artisan serve
run project custom host - php artisan serve --host=192.168.1.2
                                                   {{--  custom host ip  --}}
migrate DB - php artisan migrate

seeders

php artisan migrate:fresh --seed --seeder=UserSeeder
                                        {{--  seeder Class name  --}}
