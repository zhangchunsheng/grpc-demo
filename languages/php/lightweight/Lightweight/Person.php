<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gym.proto

namespace Lightweight;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *谁在健身
 *
 * Generated from protobuf message <code>lightweight.Person</code>
 */
class Person extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>repeated string actions = 2;</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $actions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gym::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated string actions = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->actions = $arr;

        return $this;
    }

}
