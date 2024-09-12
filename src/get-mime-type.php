	/**
	 * Get the file extension from a full path OR file name.
	 * 
	 * @param   string   $file  The full file path or file name.
	 *
	 * @return  string  The file extension in lowercase or an empty string if none found.
	 * @since   5.0.3
	 */
	public static function extension(string $file): string
	{
		// Ensure the input is a valid string and contains a file extension
		if (strpos($file, '.') === false)
		{
			return '';
		}

		// Extract and return the extension from the path
		return strtolower(pathinfo($file, PATHINFO_EXTENSION));
	}

	/**
	 * Get the mime type based on the full file path.
	 * 
	 * @param   string   $file The full file path.
	 *
	 * @return  string  The mime type or 'application/octet-stream' if none found.
	 * @since   5.0.3
	 */
	public static function mimeType(string $file): string
	{
		/**
		 *                  **DISCLAIMER**
		 * This will just match the file extension to the following
		 * array. It does not guarantee that the file is TRULY that
		 * of the extension that this function returns.
		 * https://gist.github.com/Llewellynvdm/74be373357e131b8775a7582c3de508b
		 */

		// Ensure the file exists to avoid unnecessary processing
		if (!is_file($file) || !is_readable($file))
		{
			return  self::mimeTypeFilename($file);
		}

		// Use finfo to get MIME type based on file content if available
		if (function_exists('finfo_open'))
		{
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mimetype = finfo_file($finfo, $file);
			finfo_close($finfo);

			if ($mimetype)
			{
				return $mimetype;
			}
		}

		// Fallback to mime_content_type() if available
		if (function_exists('mime_content_type'))
		{
			$mimetype = mime_content_type($file);
			if ($mimetype)
			{
				return $mimetype;
			}
		}

		// Fallback to application/octet-stream as a generic binary stream type
		return 'application/octet-stream';
	}

	/**
	 * Get the mime type based on the file extension from a file name.
	 * 
	 * @param   string   $file The file name (without path).
	 *
	 * @return  string The mime type or 'application/octet-stream' if none found.
	 * @since   5.0.3
	 */
	protected static function mimeTypeFilename(string $file): string
	{
		// Get the extension
		$extension = self::extension($file);

		// Predefined MIME types by extension for quick lookup
		if (!empty($extension) && isset(self::$fileExtensionToMimeType[$extension]))
		{
			return self::$fileExtensionToMimeType[$extension];
		}

		// Fallback to application/octet-stream if extension is unknown
		return 'application/octet-stream';
	}
