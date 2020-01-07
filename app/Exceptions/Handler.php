<?php

namespace App\Exceptions;

use Illuminate\Support\Arr;
use Illuminate\Auth\AuthenticationException;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * @param  \Exception  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Exception
     */
    public function render($request, Exception $exception)
    {
        if ($exception instanceof AuthenticationException){
            $guard = Arr::get($exception->guards(),0);

            switch ($guard){
                case 'admin':
                    return redirect(route('admin.login'));
                    break;
                case 'ins':
                    return redirect(route('ins.login'));
                    break;
                case 'police':
                    return redirect(route('police.login'));
                    break;
                case 'rda':
                    return redirect(route('rda.login'));

                default:
                    return redirect(route('login'));
                    break;
            }
        }
        return parent::render($request, $exception);
    }
}
