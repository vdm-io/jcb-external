	/**
	 * Get the file extensions
	 * 
	 * @param   string    $target   The targeted/filter option
	 * @param   boolean   $sorted   The multidimensional grouping sort (only if targeted filter is used)
	 *
	 * @return  array     All the extensions (targeted & sorted)
	 * @since   3.0.0
	 */
	public static function getFileExtensions($target = null, $sorted = false)
	{
		// we have some in-house grouping/filters :)
		$filters = array(
			'image' => array('image', 'font', 'model'),
			'document' => array('application', 'text', 'chemical', 'message'),
			'media' => array('video', 'audio'),
			'file' => array('image', 'application', 'text', 'video', 'audio'),
			'all' => array('application', 'text', 'chemical', 'message', 'image', 'font', 'model', 'video', 'audio', 'x-conference')
		);
		// sould we filter
		if ($target)
		{
			// the bucket to get extensions
			$fileextensions = array();
			// check if filter exist (if not return empty array)
			if (isset($filters[$target]))
			{
				foreach (self::$fileExtensionToMimeType as $extension => $mimetype)
				{
					// get the key mime type
					$mimearr = explode("/", $mimetype, 2);
					// check if this file extension should be added
					if (in_array($mimearr[0], $filters[$target]))
					{
						if ($sorted)
						{
							if (!isset($fileextensions[$mimearr[0]]))
							{
								$fileextensions[$mimearr[0]] = array();
							}
							$fileextensions[$mimearr[0]][$extension] = $extension;
						}
						else
						{
							$fileextensions[$extension] = $extension;
						}
					}
				}
			}
			return $fileextensions;
		}
		// we just return all file extensions
		return array_keys(self::$fileExtensionToMimeType);
	}
