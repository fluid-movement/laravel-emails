# Laravel Emails

Playing around with Laravel emails.

[Laravel email documentation is here](https://laravel.com/docs/11.x/mail)

## Install Mailpit and Valet configuration
- `brew install mailpit`
- `brew services start mailpit`
- set `MAIL_DRIVER=smtp` in env file
- `valet proxy mailpit.test http://127.0.0.1:8025`

## Usage
- Mailpit port is 1025 (http://mailpit.test)
- Create Email class: `php artisan make:mail TestMail`
- Create command: `php artisan make:command SendEmails`
- `php artisan mail:send` will send the email
- If using Markdown, publish components with `php artisan vendor:publish --tag=laravel-mail`
- [Try this route](http://emails.test/test-mail) to render email
