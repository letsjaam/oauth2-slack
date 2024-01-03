<?php

namespace AdamPaterson\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;

/**
 * Class SlackResourceOwner
 *
 * @author Adam Paterson <hello@adampaterson.co.uk>
 *
 * @package AdamPaterson\OAuth2\Client\Provider
 */
class SlackResourceOwner implements ResourceOwnerInterface
{

    /**
     * @var array
     */
    protected $response;

    /**
     * SlackResourceOwner constructor.
     *
     * @param array $response
     */
    public function __construct(array $response)
    {
        $this->response = $response;
    }

    /**
     * Return all of the owner details available as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }

    /**
     * Get user id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->response['https://slack.com/user_id'] ?: null;
    }

    /**
     * Get user name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->response['name'] ?: null;
    }

    /**
     * Get user first name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->response['given_name'] ?: null;
    }

    /**
     * Get user last name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->response['family_name'] ?: null;
    }

    /**
     * Get user email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get user locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->response['locale'] ?: null;
    }

    /**
     * Get 24x24 image url
     *
     * @return string|null
     */
    public function getImage24()
    {
        return $this->response['https://slack.com/user_image_24'] ?: null;
    }

    /**
     * Get 32x32 image url
     *
     * @return string|null
     */
    public function getImage32()
    {
        return $this->response['https://slack.com/user_image_32'] ?: null;
    }

    /**
     * Get 48x48 image url
     *
     * @return string|null
     */
    public function getImage48()
    {
        return $this->response['https://slack.com/user_image_48'] ?: null;
    }

    /**
     * Get 192x192 image url
     *
     * @return string|null
     */
    public function getImage192()
    {
        return $this->response['https://slack.com/user_image_192'] ?: null;
    }

    /**
     * Get 512x512 image url
     *
     * @return string|null
     */
    public function getImage512()
    {
        return $this->response['https://slack.com/user_image_512'] ?: null;
    }
}
