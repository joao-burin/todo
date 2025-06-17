<?php
class Task 
{
    public int $id;
    public string $descripition;
    public int $done = 0;

    public function __construct($descripition, $done, $id = null)
    {
        $this->id = $id;
        $this->descripition = $descripition;
        $this->done = $done;
    }
}