<?php

namespace ServiceDirectory;

/**
 * Class ServiceDirectory.
 */
class ServiceDirectory
{

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * @var string
     */
    protected $apiUrl = 'http://www.nasjonaltjenestekatalog.no/ws7/katalog?WSDL';

    /**
     * ServiceDirectory constructor.
     *
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
         $this->username = $username;
         $this->password = $password;
         $this->soapClient = new \SoapClient($this->apiUrl, array("trace" => 1, "exception" => 0));
    }

    /**
     * Call the API with SOAP.
     *
     * @param string $method
     * @param array $arguments
     */
    private function request($method, $arguments = array())
    {
        $data = $this->soapClient->__soapCall($method, array('parameters' => $arguments));

        if (isset($data->return)) {
            return $data->return;
        } else {
            return false;
        }
    }

    /**
     * Authenticate against .
     */
    public function authenticate()
    {
        $status = $this->request('autentisering', [
            'arg0' => $this->username,
            'arg1' => $this->password,
        ]);

        return $status;
    }

    /**
     * Fetch all service descriptions.
     */
    public function getAllServiceDescriptions()
    {
        $descriptions = $this->request('hentAlleTjenestebeskrivelser');
        return $descriptions;
    }

    /**
     * Get specific service description.
     *
     * @param array $tjenestebeskrivelse_id
     */
    public function getServiceDescription($tjenestebeskrivelse_id)
    {
        $description = $this->request('hentTjenestebeskrivelser', [
          'arg0' => $tjenestebeskrivelse_id,
        ]);
        return $description;
    }

    /**
     * Fetch all service descriptions.
     *
     * @param string $since
     */
    public function getChanges($since)
    {
        $descriptions = $this->request('hentOversiktEndringer', [
          'arg0' => $since,
        ]);
        return $descriptions;
    }

    /**
     * Print available methods.
     */
    public function debug()
    {
        echo '<pre>' . print_r($this->soapClient->__getFunctions(), true) . '</pre>';
    }
}
