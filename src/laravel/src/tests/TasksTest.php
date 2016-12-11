<?php

class ExampleTest extends TestCase
{
    /**
     * A basic functional Tasks index example.
     *
     * @return void
     */
    public function testTasksIndexExample()
    {
        $this->visit('/tasks')
             ->see('Tasks page');
    }

    /**
     * A basic functional Tasks show example.
     *
     * @return void
     */
    public function testTasksIdExample()
    {
        $this->visit('/tasks/123')
             ->see('Task 123 page');
    }
}
