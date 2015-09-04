<?php
namespace PMU\V1\Rest\Matches;

class MatchesResourceFactory
{
    public function __invoke($services)
    {
        return new MatchesResource();
    }
}
