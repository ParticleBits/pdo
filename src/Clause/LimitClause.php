<?php

namespace Pb\PDO\Clause;

class LimitClause extends ClauseContainer
{
    /**
     * @var int|string|null
     */
    private $limit = null;

    /**
     * @param int $number
     * @param int $offset
     *
     * @return void
     */
    public function limit($number, $offset = 0)
    {
        if (! is_int($number) || (! is_null($offset) && ! is_int($offset))) {
            trigger_error('Expects parameters as integers', E_USER_ERROR);
        }

        if (! is_null($offset) && $offset >= 0) {
            $this->limit = intval($number).' OFFSET '.intval($offset);
        } elseif ($number >= 0) {
            $this->limit = intval($number);
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (is_null($this->limit)) {
            return '';
        }

        return ' LIMIT '.$this->limit;
    }
}
