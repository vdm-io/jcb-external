	/**
	 * The array of dynamic content
	 *
	 * @var  array
	 */
	protected static array $dynamicContent = [
		// The banners by size (width - height)
		'banner' => [
			'728-90' => [
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/joomla-heart-wide.gif',
					'hash' => 'HASHFILE((((https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/joomla-heart-wide.gif))))',
					'html' => '<a href="https://vdm.bz/joomla-volunteers" target="_blank" title="Joomla! Volunteers Portal"><img class="jcb-sponsor-banner" src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/joomla-heart-wide.gif" alt="Joomla! Volunteers Portal" width="728" height="90" border="0"></a>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/JCM_2010_120x600.png',
					'hash' => 'HASHFILE((((https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/JCM_2010_120x600.png))))',
					'html' => '<a href="https://vdm.bz/joomla-magazine" target="_blank" title="Joomla! Community Magazine | Because community matters..."><img class="jcb-sponsor-banner" alt="Joomla! Community Magazine | Because community matters..." src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/JCM_2010_728x90.png" width="728" height="90" border="0" /></a>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/tlwebdesign_jcb_sponsor_728_90.png',
					'hash' => 'HASHFILE((((https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/tlwebdesign_jcb_sponsor_728_90.png))))',
					'html' => '<a href="https://vdm.bz/jcb-sponsor-tlwebdesign" target="_blank" title="tlwebdesign a JCB sponsor | Because community matters..."><img class="jcb-sponsor-banner" alt="tlwebdesign a JCB sponsor | Because community matters..." src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/tlwebdesign_jcb_sponsor_728_90.png" width="728" height="90" border="0" /></a>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/vdm_jcb_sponsor_728_90.gif',
					'hash' => 'HASHFILE((((https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/vdm_jcb_sponsor_728_90.gif))))',
					'html' => '<a href="https://vdm.bz/jcb-sponsor-vdm" target="_blank" title="VDM a JCB sponsor | Because community matters..."><img class="jcb-sponsor-banner" alt="VDM a JCB sponsor | Because community matters..." src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/vdm_jcb_sponsor_728_90.gif" width="728" height="90" border="0" /></a>'],
				[
					'url' => 'https://cms-experts.org/images/banners/agerix/agerix-loves-jcb-728-90.gif',
					'hash' => 'HASHFILE((((https://cms-experts.org/images/banners/agerix/agerix-loves-jcb-728-90.gif))))',
					'html' => '<a href="https://vdm.bz/jcb-sponsor-agerix" target="_blank" title="Agerix a JCB sponsor | Because community matters..."><img class="jcb-sponsor-banner" alt="Agerix a JCB sponsor | Because community matters..." src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/agerix-loves-jcb-728-90.gif" width="728" height="90" border="0" /></a>']
			],
			'160-600' => [
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/joomla-heart-tall.gif',
					'hash' => 'HASHFILE((((https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/joomla-heart-tall.gif))))',
					'html' => '<a href="https://vdm.bz/joomla-volunteers" target="_blank" title="Joomla! Volunteers Portal"><img src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/joomla-heart-tall.gif" alt="Joomla! Volunteers Portal" width="160" height="600" border="0"></a>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/JCM_2010_120x600.png',
					'hash' => 'HASHFILE((((https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/banner/JCM_2010_120x600.png))))',
					'html' => '<a href="https://vdm.bz/joomla-magazine" target="_blank" title="Joomla! Community Magazine | Because community matters..."><img src="[[[ROOT-URL]]]administrator/components/com_[[[component]]]/assets/images/banner/JCM_2010_120x600.png" alt="Joomla! Community Magazine | Because community matters..." width="120" height="600" border="0"/></a>']
			]
		],
		// The build-gif by size (width - height)
		'builder-gif' => [
			// original gif ;)
			'480-272' => [
				[
					'url' => 'https://www.joomlacomponentbuilder.com/images/builder/original.gif',
					'hash' => '676e37a949add8f4573381195cd1061c',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/original.gif" />'
				]
			],
			// new gif artwork since 2021
			'480-540' => [
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/1.gif',
					'hash' => 'ce6e36456fa794ba95d981547b2f54f8',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/1.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/2.gif',
					'hash' => '0a54dbc393359747e33db90cabb1e2d7',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/2.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/3.gif',
					'hash' => '4e5498713ff69a64a0a79dbf620372a3',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/3.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/4.gif',
					'hash' => '3554ffab2a6df95a116fd9f0db63925c',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/4.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/5.gif',
					'hash' => '08f0cdf188593eca65c6dafd7af27ef9',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/5.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/6.gif',
					'hash' => '103b46a7ac3fcb974e25d06f417a4e87',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/6.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/7.gif',
					'hash' => 'ffa8547099b7286f89ab7ff5a140dd90',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/7.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/8.gif',
					'hash' => '316df780f9e4ce81200a65d3c4303c41',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/8.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/9.gif',
					'hash' => '9ab6ba78b6e63a285fdef2ff5e447c93',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/9.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/10.gif',
					'hash' => 'cd9abaa1cb95f51a70916da6b70614f2',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/10.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/11.gif',
					'hash' => 'cfe53095b5249618e2348223b89262b9',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/11.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/12.gif',
					'hash' => '15a6690647d5160d67c80ce4dd1f5602',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/12.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/13.gif',
					'hash' => '2f77562e92c8a3b7c47664c98f551fe8',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/13.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/14.gif',
					'hash' => '46db15517ef5bd063be85134e1cc575d',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/14.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/15.gif',
					'hash' => 'e6c96eff157ea648ceb1583f2cc22544',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/15.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/16.gif',
					'hash' => '76010b7d1f99952eb9645df660467ae8',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/16.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/17.gif',
					'hash' => '021219ddd72d8fcfc7f80bd4a874d651',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/17.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/18.gif',
					'hash' => '383af3179d4ae27301c1292e630d7155',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/18.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/19.gif',
					'hash' => '8537e6d7be93447241b521f851e8a61d',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/19.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/20.gif',
					'hash' => '10d96f70e3d43086a925b00a7dc0022e',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/20.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/21.gif',
					'hash' => '161de9865b171b44039353b8d50491d3',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/21.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/22.gif',
					'hash' => '6a2354e43eb97d278d74bb2c12890988',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/22.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/23.gif',
					'hash' => '2cb6e2f9562a8dc8eef6d5d8d1a84f5e',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/23.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>'],
				[
					'url' => 'https://git.vdm.dev/joomla/jcb-external/raw/branch/master/src/images/builder/24.gif',
					'hash' => '745b3fb5e16515689132432bf02ab1b4',
					'html' => '<img src="[[[ROOT-URL]]]administrator/components/com_componentbuilder/assets/images/builder-gif/24.gif" /><br /><div style="text-align: right; font-size: smaller;">Animation produced with 3D Particle Explorations by Jack Rugile.</div>']
			]
		]
	];

	/**
	 * get the dynamic content array size
	 * 
	 * @param   string   $type      The type of content
	 * @param   string   $size      The size of the content
	 *
	 * @return  int   on success number of items in array type,size
	 * 
	 */
	public static function getDynamicContentSize(string $type, string $size): int
	{
		if (isset(self::$dynamicContent[$type]) && isset(self::$dynamicContent[$type][$size])
			&& ($nr = Super___0a59c65c_9daf_4bc9_baf4_e063ff9e6a8a___Power::check(self::$dynamicContent[$type][$size])))
		{
			return $nr;
		}
		return 0;
	}

	/**
	 * get the dynamic content
	 * 
	 * @param   string    $type      The type of content
	 * @param   string    $size      The size of the content
	 * @param   mixed     $default   The default to return
	 * @param   int       $try       Retry tracker (when bigger then array size it stops)
	 * @param   mixed     $getter    The specific getter number (not zero based)
	 *
	 * @return  string   on success html string
	 * 
	 */
	public static function getDynamicContent(string $type, string $size, $default = '', int $try = 1, $getter = null)
	{
		if (($nr = self::getDynamicContentSize($type, $size)) !== 0)
		{
			// use specific getter
			if ($getter)
			{
				$get = --$getter;
			}
			// get the random getter number
			elseif ($nr > 1)
			{
				$get = (int) rand(0, --$nr);
			}
			else
			{
				$get = 0;
			}
			// get the current target if found
			if (isset(self::$dynamicContent[$type][$size][$get]))
			{
				$target = self::$dynamicContent[$type][$size][$get];
				// set file name
				$file_name = basename($target['url']);
				// set the local path (in admin area so when the component uninstall these images get removed as well)
				$path = JPATH_ROOT . "/administrator/components/com_[[[component]]]/assets/images/$type/$file_name";
				// check if file exist or if it changed
				if (($image_data = Super___a223b31e_ea1d_4cdf_92ae_5f9becffaff0___Power::getContent($path, false)) === false ||
					md5($image_data) !== $target['hash'])
				{
					// since the file does not exist or has changed (so we have a new hash)
					// therefore we download it to validate
					if (($image_data = Super___a223b31e_ea1d_4cdf_92ae_5f9becffaff0___Power::getContent($target['url'], false)) !== false &&
						md5($image_data) === $target['hash'])
					{
						// create the JCB type path if it does not exist
						if (!Folder::exists(JPATH_ROOT . "/administrator/components/com_[[[component]]]/assets/images/$type"))
						{
							Folder::create(JPATH_ROOT . "/administrator/components/com_[[[component]]]/assets/images/$type");
						}
						// only set the image if the data match the hash
						Super___a223b31e_ea1d_4cdf_92ae_5f9becffaff0___Power::write($path, $image_data);
					}
					// we retry array size times (unless specific getter is used)
					elseif ($try <= $nr && !$getter)
					{
						// the first time around failed so we try again (the size of the array times)
						return self::getDynamicContent($type, $size, $default, ++$try);
					}
				}
				// return found content
				return str_replace('[[[ROOT-URL]]]', JURI::root(), $target['html']);
			}
		}
		return $default;
	}
