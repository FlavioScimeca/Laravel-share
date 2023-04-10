#### Ho creato questo progetto per ripassare i concetti appresi di Laravel

-   Installare TailwindCSS  
    [Guida all'installazione per Laravel](https://tailwindcss.com/docs/guides/laravel)

### [Guida installazione Fortify](https://laravel.com/docs/10.x/fortify#:~:text=Laravel%20Fortify%20is%20a%20frontend,%2C%20email%20verification%2C%20and%20more.)

1.  `PHP composer require laravel/fortify`
2.  `php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"`
3.  `php artisan migrate`
4.  The vendor:publish command discussed above will also publish the **App\Providers\FortifyServiceProvider class**. You should ensure this class is registered within the providers array of your application's **_config/app.php configuration file_**.
5.  Go to **app/Providers/FortifyServiceProvider.php** and add

    ```PHP
        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::RegisterView(function () {
            return view('auth.register');
        });
    ```

6.  Cambiare il redirect in **_app/Providers/RouteServiceProvider.php_**
7.  Fortify genera delle rotte per noi per controllare lanciamo
    ```PHP
    php artisan list
    ```
8.  > Nel Blade -> per il form di **_Registrazione_**
    ```HTML
    <form method="POST" action="{{ route('register') }}" />
    ```
9.  > I principali input **_DEVONO avere i seguenti name_**
    ```HTML
    name="email"
    name="password"
    name="password_confirmation"
    ```
10. > Form per il logout

    ```HTML
        @auth
        <li><a href="" onclick="event.preventDefault(); document.querySelector('#form-logout').submit()" >Logout</a></li>
        <form id="form-logout" class="hidden" action="{{route("logout")}}" method="POST">
        @csrf
        </form>
        @endauth
    ```

11. Per cambiare la logica di Fortify andare in **_app/Action/Fortify_**
