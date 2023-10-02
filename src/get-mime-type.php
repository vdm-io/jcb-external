	/**
	 * Get the mime type based on file extension
	 * 
	 * @param   string   $file The file name or path
	 *
	 * @return  string the mime type on success
	 * 
	 */
	public static function mimeType($file)
	{
		/**
		 *                  **DISCLAIMER**
		 * This will just match the file extension to the following
		 * array. It does not guarantee that the file is TRULY that
		 * of the extension that this function returns.
		 * https://gist.github.com/Llewellynvdm/74be373357e131b8775a7582c3de508b
		 */		

		// get the extension form file
		$extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
		// check if we have the extension listed
		if (isset(self::$fileExtensionToMimeType[$extension]))
		{
			return self::$fileExtensionToMimeType[$extension];
		}
		elseif (function_exists('mime_content_type'))
		{
			return mime_content_type($file);
		}
		elseif (function_exists('finfo_open'))
		{
			$finfo	= finfo_open(FILEINFO_MIME);
			$mimetype = finfo_file($finfo, $file);
			finfo_close($finfo);
			return $mimetype;
		}
		return 'application/octet-stream';
	}
