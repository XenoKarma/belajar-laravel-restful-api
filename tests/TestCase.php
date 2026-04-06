<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        DB::delete ('delete from address');
        DB::delete("delete from contacts");
        DB::delete("delete from users");
    }
}
