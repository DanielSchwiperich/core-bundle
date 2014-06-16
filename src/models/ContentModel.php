<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Contao;

use Contao\Model\Collection;


/**
 * Reads and writes content elements
 *
 * @package   Models
 * @author    Leo Feyer <https://github.com/leofeyer>
 * @copyright Leo Feyer 2005-2014
 */
class ContentModel extends Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_content';


	/**
	 * Find all published content elements by their parent ID and parent table
	 *
	 * @param integer $intPid         The article ID
	 * @param string  $strParentTable The parent table name
	 * @param array   $arrOptions     An optional options array
	 *
	 * @return Collection|null A collection of models or null if there are no content elements
	 */
	public static function findPublishedByPidAndTable($intPid, $strParentTable, array $arrOptions=[])
	{
		$t = static::$strTable;

		// Also handle empty ptable fields (backwards compatibility)
		if ($strParentTable == 'tl_article')
		{
			$arrColumns = ["$t.pid=? AND ($t.ptable=? OR $t.ptable='')"];
		}
		else
		{
			$arrColumns = ["$t.pid=? AND $t.ptable=?"];
		}

		if (!BE_USER_LOGGED_IN)
		{
			$time = time();
			$arrColumns[] = "($t.start='' OR $t.start<$time) AND ($t.stop='' OR $t.stop>$time) AND $t.invisible=''";
		}

		if (!isset($arrOptions['order']))
		{
			$arrOptions['order'] = "$t.sorting";
		}

		return static::findBy($arrColumns, [$intPid, $strParentTable], $arrOptions);
	}
}
