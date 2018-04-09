<?php
namespace qiwi;

use php\format\JsonProcessor;
use qiwi\objects\User;
use php\format\ProcessorException;
use php\io\IOException;
use facade\Json;
use qiwi\QiwiException;
use qiwi\QiwiError;
use bundle\http\HttpResponse;
use qiwi\query\TransactionInfoQuery;
use qiwi\query\PaymentStatQuery;
use qiwi\query\PaymentHistoryQuery;
use qiwi\query\PayQuery;
use qiwi\query\BalanceQuery;
use qiwi\query\CurrentProfileQuery;
use bundle\http\HttpClient;



class QiwiApi 
{
    const TIME_FORMAT = "yyyy-MM-dd'T'HH:mm:ss.SSSX";
    const TIME_FORMAT2 = "yyyy-MM-dd'T'HH:mm:ssX";
    protected $mobileDetectUrl = "https://qiwi.com/mobile/detect.action";
    protected $apiUrl = "https://edge.qiwi.com/";

    /**
     * @var HttpClient
     */
    protected $client;
    protected $token;
    /**
     * @var User
     */
    protected $cachedProfile;


    function __construct($token)
    {
        $this->token = $token;
        $this->client = new HttpClient;
        $this->client->headers['Authorization'] = "Bearer {$this->token}";
        $this->client->headers['Accept'] = 'application/json';
        $this->client->requestType = "JSON";
        $this->cachedProfile = $this->currentProfile()->query();
    }
    /**
     * @return CurrentProfileQuery
     */
    function currentProfile()
    {
        return new CurrentProfileQuery($this);
    }
    /**
     * @return BalanceQuery
     */
    function balance()
    {
        return new BalanceQuery($this);
    }
    /**
     * @return PayQuery
     */
    function pay()
    {
        return new PayQuery($this);
    }
    /**
     * @return PaymentHistoryQuery
     */
    function paymentHistory()
    {
        return new PaymentHistoryQuery($this);
    }
    /**
     * @return PaymentStatQuery
     */
    function paymentStat()
    {
        return new PaymentStatQuery($this);
    }
    /**
     * @return TransactionInfoQuery
     */
    function transactionInfo()
    {
        return new TransactionInfoQuery($this);
    }
    /**
     * @return User
     */
    function getCachedProfile()
    {
        return $this->cachedProfile;
    }
    /**
     * @return int
     */
    function getWallet()
    {
        return $this->cachedProfile->authInfo->personId;
    }
    /**
     * @return HttpResponse
     */
    function fetch($url, $method, $data = [])
    {
        return $this->client->execute($url, $method, $data);
    }
    /**
     * @return mixed
     */
    function query($method, $executeMethod, $data = [])
    {
        try{
            /** @var HttpResponse $res */
            $res = $this->fetch($this->apiUrl.$method, $executeMethod, $data);
            if(!$res->isSuccess())
            {
                if($res->statusCode() === 400)
                    throw new QiwiError("Argument type mismatch", 400);
                if($res->statusCode() === 401)
                    throw new QiwiError("Invalid token", 401);
                if($res->statusCode() === 404)
                    throw new QiwiError("Not found", 404);
                if($res->statusCode() === 423)
                    throw new QiwiError("Too many requests", 423);
                throw new QiwiException($res->statusMessage(), $res->statusCode());
            }
            $proc = new JsonProcessor;
            return $proc->parse($res->body());
        }
        catch(IOException $e) {
            throw new QiwiException("Connection error", 0);
        }
        catch(ProcessorException $e){
            throw new QiwiException("Parse exception", 1);
        }
    }
}