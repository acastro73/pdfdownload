<?php
/**
 * PDF Download plugin for Craft CMS 3.x
 *
 * Permite fazer o download de documentos em formato PDF
 *
 * @link      https://www.drible.pt/
 * @copyright Copyright (c) 2019 Drible
 */

namespace driblepdfdownload\pdfdownload\variables;

use driblepdfdownload\pdfdownload\PdfDownload;

use Craft;

/**
 * PDF Download Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.pdfDownload }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Drible
 * @package   PdfDownload
 * @since     1.0.0
 */
class PdfDownloadVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.pdfDownload.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.pdfDownload.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
