<?php

namespace andeersg\TjenesteKatalog;

use andeersg\TjenesteKatalog\Exceptions\Exception;
use andeersg\TjenesteKatalog\Exceptions\ConnectionException;

/**
 * Class ServiceDirectory.
 */
class ServiceDirectory
{

    /**
     * @var string
     */
    protected $username = false;

    /**
     * @var string
     */
    protected $password = false;

    /**
     * @var SoapClient
     */
    protected $soapClient;

    /**
     * @var bool
     */
    protected $isAuthenticated = false;

    /**
     * @var string
     */
    protected $apiUrl = 'http://www.nasjonaltjenestekatalog.no/ws7/katalog?WSDL';

    /**
     * ServiceDirectory constructor.
     */
    public function __construct()
    {
        try {
            $this->soapClient = new \SoapClient($this->apiUrl, array("trace" => 1, "exception" => 0));
        } catch (\SoapFault $e) {
            throw new ConnectionException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * Set credentials.
     *
     * @param string $username
     * @param string $password
     * @return ServiceDirectory
     */
    public function setCredentials($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        $status = $this->authenticate();
        if ($status) {
            $this->isAuthenticated = true;
        }

        return $this;
    }

    /**
     * Call the API with SOAP.
     *
     * @param string $method
     * @param array $arguments
     */
    private function request($method, $arguments = array())
    {
        try {
            $data = $this->soapClient->__soapCall($method, array('parameters' => $arguments));
        } catch (\SoapFault $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }

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
     *
     * @return array Array of Service or empty array if nothing is found.
     */
    public function getAllServiceDescriptions()
    {
        $output = [];
        $services = $this->request('hentAlleTjenestebeskrivelser');
        if ($services) {
            foreach ($services as $service) {
                $output[] = new Service($service);
            }
            return $output;
        } else {
            return [];
        }
    }

    /**
     * Get specific service description.
     *
     * @param array $tjenestebeskrivelse_id
     */
    public function getServiceDescription(array $service_description_id)
    {
        $description = $this->request('hentTjenestebeskrivelser', [
          'arg0' => $service_description_id,
        ]);
        return $description;
    }

    /**
     * Fetch all overview.
     *
     * @param string $since
     */
    public function getOverview($since)
    {
        $descriptions = $this->request('hentOversikt');
        return $descriptions;
    }

    /**
     * Get overview of changes since date.
     *
     * @param string $since
     */
    public function getOverviewChanges($since)
    {
        $descriptions = $this->request('hentOversiktEndringer', [
          'arg0' => $since,
        ]);
        return $descriptions;
    }

    /**
     * Fetch all changes since date..
     *
     * @param string $since
     * @return array Array of Service or empty array if nothing is found.
     */
    public function getChanges($since)
    {
        $services = $this->request('hentEndringer', [
          'arg0' => $since,
        ]);
        if ($services) {
            foreach ($services as $service) {
                $output[] = new Service($service);
            }
            return $output;
        } else {
            return [];
        }
    }

    /**
     * Get changes for a single service.
     *
     * @param array $service_description_id
     * @param string $since
     */
    public function getChanged(array $service_description_id, $since)
    {
        $descriptions = $this->request('hentEndret', [
            'arg0' => $service_description_id,
            'arg1' => $since,
        ]);
        return $descriptions;
    }

    /**
     * Fetch text based on text.
     *
     * @param string $key
     */
    public function getText($key)
    {
        $text = $this->request('hentLostekst', [
            'arg0' => $key,
        ]);
        return $text;
    }

    /**
     * Fetch text based on text.
     *
     * @param string $since
     */
    public function getChangedTexts($since)
    {
        $texts = $this->request('hentEndredeLostekster', [
            'arg0' => $since,
        ]);
        return $texts;
    }

    /**
     * Fetch text based on text.
     *
     * @param string $key
     */
    public function getPhrases($key)
    {
        $texts = $this->request('fraser', [
            'arg0' => $key,
        ]);
        return $texts;
    }

    /**
     * Print available methods.
     */
    public function debug()
    {
        echo '<pre>' . print_r($this->soapClient->__getFunctions(), true) . '</pre>';
    }
}
