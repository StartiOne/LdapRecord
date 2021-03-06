<?php

namespace LdapRecord\Models;

use LdapRecord\LdapRecordException;

class ModelDoesNotExistException extends LdapRecordException
{
    /**
     * The class name of the model that does not exist.
     *
     * @var Model
     */
    protected $model;

    /**
     * Sets the model that does not exist.
     *
     * @param Model $model
     *
     * @return ModelDoesNotExistException
     */
    public function setModel(Model $model)
    {
        $this->model = $model;

        $class = get_class($model);

        $this->message = "Model [{$class}] does not exist.";

        return $this;
    }
}
