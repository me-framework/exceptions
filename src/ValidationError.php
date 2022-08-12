<?php
namespace me\exceptions;
/**
 * 
 */
class ValidationError extends Exception {
    /**
     * 
     */
    public function __construct(array $errors = []) {
        return parent::__construct(json_encode($errors), 422);
    }
}