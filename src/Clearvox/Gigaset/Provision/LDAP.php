<?php
namespace Clearvox\Gigaset\Provision;

/**
 * Class LDAP
 * @package Clearvox\Gigaset\Provision
 */
class LDAP
{
    /**
     * @var string
     */
    private $directoryName;

    /**
     * @var boolean
     */
    private $enable;

    /**
     * @var Server
     */
    private $server;

    /**
     * @var string
     */
    private $baseDN;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nameFilter;

    /**
     * @var string
     */
    private $numberFilter;

    /**
     * @var string
     */
    private $displayFormat;

    /**
     * @var int
     */
    private $maxNumberOfSearchResults;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $phoneHome;

    /**
     * @var string
     */
    private $phoneOffice;

    /**
     * @var string
     */
    private $phoneMobile;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $additionalAttribute;

    /**
     * @var boolean
     */
    private $additionalAttributeDialable;

    /**
     * @return string
     */
    public function getDirectoryName()
    {
        return $this->directoryName;
    }

    /**
     * @param string $directoryName
     * @returns $this
     */
    public function setDirectoryName($directoryName)
    {
        $this->directoryName = $directoryName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isEnable()
    {
        return $this->enable;
    }

    /**
     * @param boolean $enable
     * @returns $this
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return Server
     */
    public function getServer()
    {
        if(!$this->server) {
            $this->server = new Server();
        }

        return $this->server;
    }

    /**
     * @param Server $server
     * @returns $this
     */
    public function setServer($server)
    {
        $this->server = $server;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseDN()
    {
        return $this->baseDN;
    }

    /**
     * @param string $baseDN
     * @returns $this
     */
    public function setBaseDN($baseDN)
    {
        $this->baseDN = $baseDN;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @returns $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @returns $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameFilter()
    {
        return $this->nameFilter;
    }

    /**
     * @param string $nameFilter
     * @returns $this
     */
    public function setNameFilter($nameFilter)
    {
        $this->nameFilter = $nameFilter;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberFilter()
    {
        return $this->numberFilter;
    }

    /**
     * @param string $numberFilter
     * @returns $this
     */
    public function setNumberFilter($numberFilter)
    {
        $this->numberFilter = $numberFilter;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayFormat()
    {
        return $this->displayFormat;
    }

    /**
     * @param string $displayFormat
     * @returns $this
     */
    public function setDisplayFormat($displayFormat)
    {
        $this->displayFormat = $displayFormat;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfSearchResults()
    {
        return $this->maxNumberOfSearchResults;
    }

    /**
     * @param int $maxNumberOfSearchResults
     * @returns $this
     */
    public function setMaxNumberOfSearchResults($maxNumberOfSearchResults)
    {
        $this->maxNumberOfSearchResults = $maxNumberOfSearchResults;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @returns $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @returns $this
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneHome()
    {
        return $this->phoneHome;
    }

    /**
     * @param string $phoneHome
     * @returns $this
     */
    public function setPhoneHome($phoneHome)
    {
        $this->phoneHome = $phoneHome;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneOffice()
    {
        return $this->phoneOffice;
    }

    /**
     * @param string $phoneOffice
     * @returns $this
     */
    public function setPhoneOffice($phoneOffice)
    {
        $this->phoneOffice = $phoneOffice;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * @param string $phoneMobile
     * @returns $this
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @returns $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     * @returns $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @returns $this
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @returns $this
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @returns $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @returns $this
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @returns $this
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalAttribute()
    {
        return $this->additionalAttribute;
    }

    /**
     * @param string $additionalAttribute
     * @returns $this
     */
    public function setAdditionalAttribute($additionalAttribute)
    {
        $this->additionalAttribute = $additionalAttribute;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalAttributeDialable()
    {
        return $this->additionalAttributeDialable ? 'Yes' : 'No';
    }

    /**
     * @param bool $additionalAttributeDialable
     * @returns $this
     */
    public function setAdditionalAttributeDialable($additionalAttributeDialable)
    {
        $this->additionalAttributeDialable = $additionalAttributeDialable;
        return $this;
    }

    use ToArray;

}