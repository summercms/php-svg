<?php

namespace SVG\Nodes\Texts;

use SVG\Nodes\SVGNodeContainer;

/**
 * Represents the SVG tag 'textPath'.
 */
class SVGTextPath extends SVGNodeContainer
{
    const TAG_NAME = 'textPath';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     *
     * @param SVGRasterizer $rasterizer
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        // Nothing to rasterize.
    }
}
