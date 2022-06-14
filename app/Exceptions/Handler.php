<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

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
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     * TODO: Possible hook for Slack errors?
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        // Create a JSON response if the request is an API call
        if ($this->isApiCall($request)) {
            return $this->getJsonResponseForException($request, $e);
        }

        // Return HTML if not
        return parent::render($request, $e);
    }

    /**
     * Helper func to determine a request is an API call
     */
    protected function isApiCall($request)
    {
        return strpos($request->getUri(), '/v1') !== false;
    }

    /**
     * Creates a new JSON response based on exception type.
     */
    protected function getJsonResponseForException($request, Throwable $e)
    {
        switch(true) {
            case $e instanceof ModelNotFoundException:
                return $this->modelNotFound($e);
            case $e instanceof ValidationException:
                return $this->validationError($e);
            default:
                return $this->badRequest($e);
        }
    }

    /**
     * Returns json response for Eloquent model not found exception.
     */
    protected function modelNotFound($exception)
    {
        return response()->json(['error' => 'Record not found'], 404);
    }

    /**
     * Output validations errors
     */
    protected function validationError($e)
    {
        return response()->json([
            'status' => 'error',
            'message' => [
                'errors' => $e->getMessage(),
                'fields' => $e->validator->getMessageBag()->toArray()
            ]
        ], JsonResponse::HTTP_PRECONDITION_FAILED);
    }

    /**
     * Returns json response for generic bad request.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function badRequest($e)
    {
        if (method_exists($e, 'getStatusCode')) {
            $statusCode = $e->getStatusCode();
        } else {
            $statusCode = 500;
        }

        $response = [];
        $response['status'] = $statusCode;

        switch ($statusCode) {
            case 401:
                $response['message'] = $e->getMessage() ?? 'Unauthorized';
                break;
            case 403:
                $response['message'] = $e->getMessage() ?? 'Forbidden';
                break;
            case 404:
                $response['message'] = $e->getMessage() ?? 'Not Found';
                break;
            case 405:
                $response['message'] = $e->getMessage() ?? 'Method Not Allowed';
                break;
            case 422:
                $response['message'] = $e->original['message'];
                $response['errors']  = $e->original['errors'];
                break;
            default:
                $response['message'] = ($statusCode == 500) ? 'Whoops, looks like something went wrong' : $e->getMessage();
                if (config('app.debug')) {
                    $response['trace']   = $e->getTrace();
                    $response['message'] = $e->getMessage();
                }
                break;
        }

        return response()->json($response, $statusCode);
    }
}
