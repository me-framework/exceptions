<?php
namespace me\exceptions;
/**
 * 
 */
class HttpNotFound extends Exception {
    /**
     * 
     */
    public function __construct(string $message = "") {
        return parent::__construct($message, 404);
    }
}