<?php
/**
 * TokensApi
 * PHP version 7.4
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NoFrixion MoneyMoov API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Nofrixion\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Nofrixion\Client\ApiException;
use Nofrixion\Client\Configuration;
use Nofrixion\Client\HeaderSelector;
use Nofrixion\Client\ObjectSerializer;

/**
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  Nofrixion\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TokensApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'createMerchantToken' => [
            'application/json',
        ],
        'deleteToken' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: Configuration::getDefaultConfiguration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
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
     * Operation createMerchantToken
     *
     * Creates a new merchant API token.
     *
     * @param  \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd $no_frixion_money_moov_models_token_add The details of the merchant token to add. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createMerchantToken'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken
     */
    public function createMerchantToken($no_frixion_money_moov_models_token_add = null, string $contentType = self::contentTypes['createMerchantToken'][0])
    {
        list($response) = $this->createMerchantTokenWithHttpInfo($no_frixion_money_moov_models_token_add, $contentType);
        return $response;
    }

    /**
     * Operation createMerchantTokenWithHttpInfo
     *
     * Creates a new merchant API token.
     *
     * @param  \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd $no_frixion_money_moov_models_token_add The details of the merchant token to add. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createMerchantToken'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken, HTTP status code, HTTP response headers (array of strings)
     */
    public function createMerchantTokenWithHttpInfo($no_frixion_money_moov_models_token_add = null, string $contentType = self::contentTypes['createMerchantToken'][0])
    {
        $request = $this->createMerchantTokenRequest($no_frixion_money_moov_models_token_add, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            switch($statusCode) {
                case 200:
                    if ('\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $returnType = '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
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
                        '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createMerchantTokenAsync
     *
     * Creates a new merchant API token.
     *
     * @param  \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd $no_frixion_money_moov_models_token_add The details of the merchant token to add. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createMerchantToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createMerchantTokenAsync($no_frixion_money_moov_models_token_add = null, string $contentType = self::contentTypes['createMerchantToken'][0])
    {
        return $this->createMerchantTokenAsyncWithHttpInfo($no_frixion_money_moov_models_token_add, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createMerchantTokenAsyncWithHttpInfo
     *
     * Creates a new merchant API token.
     *
     * @param  \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd $no_frixion_money_moov_models_token_add The details of the merchant token to add. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createMerchantToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createMerchantTokenAsyncWithHttpInfo($no_frixion_money_moov_models_token_add = null, string $contentType = self::contentTypes['createMerchantToken'][0])
    {
        $returnType = '\Nofrixion\Client\Model\NoFrixionMoneyMoovModelsMerchantToken';
        $request = $this->createMerchantTokenRequest($no_frixion_money_moov_models_token_add, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createMerchantToken'
     *
     * @param  \Nofrixion\Client\Model\NoFrixionMoneyMoovModelsTokenAdd $no_frixion_money_moov_models_token_add The details of the merchant token to add. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createMerchantToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createMerchantTokenRequest($no_frixion_money_moov_models_token_add = null, string $contentType = self::contentTypes['createMerchantToken'][0])
    {



        $resourcePath = '/api/v1/tokens';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['text/plain', 'application/json', 'text/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($no_frixion_money_moov_models_token_add)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($no_frixion_money_moov_models_token_add));
            } else {
                $httpBody = $no_frixion_money_moov_models_token_add;
            }
        } elseif (count($formParams) > 0) {
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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation deleteToken
     *
     * Deletes a merchant API token.
     *
     * @param  string $id The ID of the token to delete. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteToken'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function deleteToken($id, string $contentType = self::contentTypes['deleteToken'][0])
    {
        $this->deleteTokenWithHttpInfo($id, $contentType);
    }

    /**
     * Operation deleteTokenWithHttpInfo
     *
     * Deletes a merchant API token.
     *
     * @param  string $id The ID of the token to delete. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteToken'] to see the possible values for this operation
     *
     * @throws \Nofrixion\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteTokenWithHttpInfo($id, string $contentType = self::contentTypes['deleteToken'][0])
    {
        $request = $this->deleteTokenRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();


            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation deleteTokenAsync
     *
     * Deletes a merchant API token.
     *
     * @param  string $id The ID of the token to delete. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTokenAsync($id, string $contentType = self::contentTypes['deleteToken'][0])
    {
        return $this->deleteTokenAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteTokenAsyncWithHttpInfo
     *
     * Deletes a merchant API token.
     *
     * @param  string $id The ID of the token to delete. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTokenAsyncWithHttpInfo($id, string $contentType = self::contentTypes['deleteToken'][0])
    {
        $returnType = '';
        $request = $this->deleteTokenRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'deleteToken'
     *
     * @param  string $id The ID of the token to delete. (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['deleteToken'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteTokenRequest($id, string $contentType = self::contentTypes['deleteToken'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling deleteToken'
            );
        }


        $resourcePath = '/api/v1/tokens/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

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

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'DELETE',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
