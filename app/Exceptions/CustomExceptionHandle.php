<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Throwable;

class CustomExceptionHandle extends Exception
{


    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Report the exception.
     *
     * @return void
     */

    public function report()
    {

    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function render(Request $request)
    {

        return response()->view(
            'errors.custom',
            array(
                'exception' => $this
            )
        );

    }
}
