<?php
/**
 * PDF Download plugin for Craft CMS 3.x
 *
 * Permite fazer o download de documentos em formato PDF
 *
 * @link      https://www.drible.pt/
 * @copyright Copyright (c) 2019 Drible
 */

namespace driblepdfdownload\pdfdownload\utilities;

use driblepdfdownload\pdfdownload\PdfDownload;
use driblepdfdownload\pdfdownload\assetbundles\pdfdownloadutilityutility\PdfDownloadUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * PDF Download Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Drible
 * @package   PdfDownload
 * @since     1.0.0
 */
class PdfDownloadUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('pdf-download', 'PdfDownloadUtility');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'pdfdownload-pdf-download-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@driblepdfdownload/pdfdownload/assetbundles/pdfdownloadutilityutility/dist/img/PdfDownloadUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(PdfDownloadUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'pdf-download/_components/utilities/PdfDownloadUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
