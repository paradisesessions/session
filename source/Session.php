<?php

/** Namespace */
namespace ParadiseSessions\Session;

/**
 * Session.php
 *
 * Session
 *
 * @package ParadiseSessions\Session
 * @author Matheus Bastos <matsince1993@yahoo.com>
 * @version 1.0
 * @link https://github.com/paradisesessions/session
 */
class Session
{
    /**
     * @param null|array $options
     */
    public function __construct(null|array $options = [])
    {
        if (!session_id()) {
            session_start($options);
        }
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function __get(string $key): mixed
    {
        if (!empty($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        return null;
    }

    /**
     * @param string $key
     */
    public function __isset(string $key): bool
    {
        return $this->has($_SESSION[$key]);
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * @return null|object
     */
    public function all(): null|object
    {
        return (object) $_SESSION;
    }

    /**
     * @param string $key
     * @param mixed $value
     * @return self
     */
    public function set(string $key, mixed $value): self
    {
        $_SESSION[$key] = is_array($value) ? (object) $value : $value;
        return $this;
    }

    /**
     * @param string $key
     * @return self
     */
    public function unset(string $key): self
    {
        unset($_SESSION[$key]);
        return $this;
    }

    /**
     * @return self
     */
    public function regenerate(): self
    {
        session_regenerate_id(true);
        return $this;
    }

    /**
     * @return self
     */
    public function destroy(): self
    {
        session_unset();
        if (!empty($_SESSION)) {
            session_destroy();
        }

        return $this;
    }
}
