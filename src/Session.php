<?php

namespace Lika\Session;

class Session
{
    /**
     * @param $name
     * @param $value
     * @return mixed
     */
    public function put($name, $value)
    {
        $_SESSION[$name] = $value;
        return $_SESSION[$name];
    }

    /**
     * @param $name
     * @return bool
     */
    public function exists($name)
    {
        return isset($_SESSION[$name]);
    }

    /**
     * @param $name
     */
    public function delete($name)
    {
        if($this->exists($name)){
            unset($_SESSION[$name]);
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    public function get($name)
    {
        return $_SESSION[$name];
    }

    /**
     * @param $name
     * @param string $string
     * @param null $redirectTo
     */
    public function addMessage($name, $string = '', $redirectTo = null)
    {
        $this->put($name, $string);
        if(isset($redirectTo)){
            header("location: {$redirectTo}");
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getMessage($name)
    {
        if($this->exists($name) && $this->get($name) !== '') {
            $session = $this->get($name);
            $this->delete($name);

            return $session;
        }
    }

}
