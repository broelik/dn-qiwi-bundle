<?php
namespace qiwi\query;

use qiwi\objects\User;


class CurrentProfileQuery extends BaseQuery
{
    /**
     * @return CurrentProfileQuery
     */
    function authInfoEnabled($value)
    {
        $this->data['authInfoEnabled'] = $value;
        return $this;
    }
    /**
     * @return CurrentProfileQuery
     */
    function contractInfoEnabled($value)
    {
        $this->data['contractInfoEnabled'] = $value;
        return $this;
    }
    /**
     * @return CurrentProfileQuery
     */
    function userInfoEnabled($value)
    {
        $this->data['userInfoEnabled'] = $value;
        return $this;
    }
    /**
     * @return User
     */
    function query()
    {
        return $this->api->query("person-profile/v1/profile/current", "GET", $this->data);
    }
}