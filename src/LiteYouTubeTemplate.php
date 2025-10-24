<?php

namespace SychO\LiteYouTube;

use s9e\TextFormatter\Configurator;

class LiteYouTubeTemplate
{
    public function __invoke(Configurator $config)
    {
        if (! isset($config->MediaEmbed)) {
            return;
        }

        $tag = $config->tags['YOUTUBE'];

        $tag->template = '<lite-youtube nocookie autopause videoid="{@id}"></lite-youtube>';
    }
}
