<?php
/**
 * VendorTransactionStatusApi
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Retail Procurement Transaction Status
 *
 * The Selling Partner API for Retail Procurement Transaction Status provides programmatic access to status information on specific asynchronous POST transactions for vendors.
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\ObjectSerializer;

/**
 * VendorTransactionStatusApi Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class VendorTransactionStatusApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration   $config
     * @param ClientInterface $client
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector($this->config);
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getTransaction
     *
     * @param  string $transaction_id The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse
     */
    public function getTransaction($transaction_id)
    {
        list($response) = $this->getTransactionWithHttpInfo($transaction_id);
        return $response;
    }

    /**
     * Operation getTransactionWithHttpInfo
     *
     * @param  string $transaction_id The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getTransactionWithHttpInfo($transaction_id)
    {
        $request = $this->getTransactionRequest($transaction_id);
        $signedRequest = $this->config->signRequest(
            $request
        );

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getResponse()->getBody()->getContents()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 401:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 415:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getTransactionAsync
     *
     * 
     *
     * @param  string $transaction_id The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionAsync($transaction_id)
    {
        return $this->getTransactionAsyncWithHttpInfo($transaction_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getTransactionAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $transaction_id The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTransactionAsyncWithHttpInfo($transaction_id)
    {
        $returnType = '\SellingPartnerApi\Model\VendorTransactionStatus\GetTransactionResponse';
        $request = $this->getTransactionRequest($transaction_id);
        $signedRequest = $this->config->signRequest(
            $request
        );

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()->getContents()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getTransaction'
     *
     * @param  string $transaction_id The GUID provided by Amazon in the &#39;transactionId&#39; field in response to the post request of a specific transaction. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTransactionRequest($transaction_id)
    {
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null || (is_array($transaction_id) && count($transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_id when calling getTransaction'
            );
        }

        $resourcePath = '/vendor/transactions/v1/transactions/{transactionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($transaction_id !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionId' . '}',
                ObjectSerializer::toPathValue($transaction_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
