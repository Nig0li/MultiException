<?php
namespace lib;


class MultiException extends \Exception implements \ArrayAccess, \Iterator
{
    use TCollection;
}