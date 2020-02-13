## Add ability to access session in Laravel API

Demo app where you can get and save session data with api requests  

### Changes:
https://github.com/OlyaFilatova/laravel-api-session/commit/4bea71a178245e2b3551bb05dce40ccc36bbe86d

1. In the **app/Http/Kernel.php** file move `\Illuminate\Session\Middleware\StartSession::class`, into list `$middleware`
2. Access session using global function - `session()` (or you can use `$request->session()`)

In the **resources/views/welcome.blade.php** file you can find four functions `apiSendSession`, `apiGetSession`, `webSendSession`, `webGetSession`
with which you can test session behaviour through your browser's console.

In the **routes/api.php** and **routes/web.php** files you can find routes that store and get session key value
