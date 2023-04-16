<?php

/** Namespace */
namespace ParadiseSessions\Session\Tests;

/** Dependencies */
use ParadiseSessions\Session\Session;
use PHPUnit\Framework\TestCase;

/**
 * SessionTest.php
 *
 * Session Test
 *
 * @package ParadiseSessions\Session\Tests
 * @author Matheus Bastos <matsince1993@yahoo.com>
 * @version 1.0
 * @link http://github.com/paradisesessions/session
 */
final class SessionTest extends TestCase
{
    /** @var Session */
    protected $session;

    public function setUp(): void
    {
        $this->session = new Session();
    }

    public function test_should_create_named_session(): void
    {
        $this->session->set('email', 'name@server.com');
        $this->assertEquals('name@server.com', $this->session->email);
    }

    public function test_should_exists_named_session(): void
    {
        $this->session->set('email', 'name@server.com');
        $this->assertTrue($this->session->has('email'));
    }

    public function test_should_create_and_unset_named_session(): void
    {
        $this->session->set('email', 'name@server.com');
        $this->assertEquals('name@server.com', $this->session->email);
        $this->session->unset('email');
        $this->assertFalse($this->session->has('email'));
    }

    public function test_should_all_session_and_destroy(): void
    {
        $this->session->set('email', 'name@server.com');
        $this->assertIsObject($this->session->all());
        $this->session->destroy();
        $this->assertEmpty($_SESSION);
    }

    public function tearDown(): void
    {
        $this->session->destroy();
    }
}
