<?php

namespace Modera\BackendTranslationsToolBundle\Contributions;

use Modera\ExpanderBundle\Ext\ContributorInterface;
use Modera\MjrIntegrationBundle\Sections\Section;

/**
 * @author    Sergei Vizel <sergei.vizel@modera.org>
 * @copyright 2014 Modera Foundation
 */
class SectionsProvider implements ContributorInterface
{
    /**
     * @var Section[]
     */
    private ?array $items = null;

    public function getItems(): array
    {
        if (!$this->items) {
            $this->items = [
                new Section('tools.translations', 'Modera.backend.translationstool.toolscontribution.runtime.Section', [
                    Section::META_NAMESPACE => 'Modera.backend.translationstool',
                    Section::META_NAMESPACE_PATH => '/bundles/moderabackendtranslationstool/js',
                ]),
            ];
        }

        return $this->items;
    }
}
