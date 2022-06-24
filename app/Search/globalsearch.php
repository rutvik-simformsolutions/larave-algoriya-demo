<?php

namespace App\Search;

use Algolia\ScoutExtended\Searchable\Aggregator;

class globalsearch extends Aggregator
{
    /**
     * The names of the models that should be aggregated.
     *
     * @var string[]
     */
    protected $models = [
        // ..
        \App\Models\Department::class,
        \App\Models\Skill::class,
        \App\Models\User::class,
    ];
}
