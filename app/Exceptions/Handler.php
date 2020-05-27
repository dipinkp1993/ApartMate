<?php

namespace App\Exceptions;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Session;
use Throwable;
use Auth;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        return parent::render($request, $exception);
        if ($exception instanceof \Illuminate\Session\TokenMismatchException) {
            return redirect()->route('login');
        }
    }
    protected function unauthenticated($request, AuthenticationException $exception)
    {
    if ($request->expectsJson()) {
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }
    /*if ($request->is('servicecenter') || $request->is('servicecenter/*')) {
        return redirect()->guest('/login/servicecenter');
    }
    if ($request->is('wholesaler') || $request->is('wholesaler/*')) {
        return redirect()->guest('/login/wholesaler');
    }*/
    $guard = array_get($exception->guards(), 0);
    switch ($guard) {
        case 'admin':
            $login = 'adminlogin';
            break;
        default:
            $login = 'login';
            break;
    }
    Session::forget('url.intented'); 
    return redirect()->route($login);
}
}
