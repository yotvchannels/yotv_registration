<?php
namespace App\Components;

use MatthiasMullie\PathConverter\Converter;


class CustomJsMinifier extends \MatthiasMullie\Minify\JS
{

	protected $minifiedFiles = [];


	public function add($path)
	{
		$this->data[] = $path;
	}


	public function addMinified($path)
	{
		$this->minifiedFiles[] = $path;
		$this->data[] = $path;
	}


	protected function translateSingleJsFile($content)
	{
		$content = $this->replace($content);
		$content = $this->stripWhitespace($content);
		$content = $this->propertyNotation($content);
		$content = $this->shortenBools($content);
		$content = $this->restoreExtractedData($content);
		return $content;
	}


	public function execute($path = NULL)
	{
		$this->extractStrings('\'"`');
		$this->stripComments();
		$this->extractRegex();

		$content = '';

		foreach ($this->data as $source) {
			$js = $this->load($source);
			if (!in_array($source, $this->minifiedFiles)) {
				$js = $this->translateSingleJsFile($js);
			}
			$content .= $js . "\n;";
		}
		return $content;
	}

}

class CustomCssMinifier extends \MatthiasMullie\Minify\CSS
{

	protected $minifiedFiles = [];


	public function add($path)
	{
		$this->data[] = $path;
	}


	public function execute($path = NULL)
	{
		$content = '';

		// loop files
		foreach ($this->data as $source) {
			$css = $this->load($source);
			/*
			 * Let's first take out strings & comments, since we can't just remove
			 * whitespace anywhere. If whitespace occurs inside a string, we should
			 * leave it alone. E.g.:
			 * p { content: "a   test" }
			 */
			$this->extractStrings();
			$this->stripComments();
			$css = $this->replace($css);

			$css = $this->stripWhitespace($css);
			$css = $this->shortenHex($css);
			$css = $this->shortenZeroes($css);
			$css = $this->stripEmptyTags($css);

			// restore the string we've extracted earlier
			$css = $this->restoreExtractedData($css);

			$source = $source ? : '';
			$css = $this->combineImports($source, $css, []);
			$css = $this->importFiles($source, $css);

			/*
			 * If we'll save to a new path, we'll have to fix the relative paths
			 * to be relative no longer to the source file, but to the new path.
			 * If we don't write to a file, fall back to same path so no
			 * conversion happens (because we still want it to go through most
			 * of the move code...)
			 */
			$converter = new Converter($source, $path ? : $source);
			$css = $this->move($converter, $css);

			// combine css
			$content .= $css;
		}

		$content = $this->moveImportsToTop($content);

		return $content;
	}
}


class CssJsLoaderFactory
{

	public function create()
	{
		$control = new CssJsLoader;
		return $control;
	}
}


class CssJsLoader extends \Nette\Application\UI\Control
{

	private $tempDir;

	/**
	 * @var CustomCssMinifier
	 */
	private $cssMinifier;

	/**
	 * @var CustomJsMinifier
	 */
	private $jsMinifier;

	private $js = [];

	private $css = [];


	public function __construct()
	{
		$this->tempDir = 'temp';
		$this->cssMinifier = new CustomCssMinifier();
		$this->jsMinifier = new CustomJsMinifier();
	}


	public function addCss($css)
	{
		$this->css[] = $css;
		$this->cssMinifier->add($css);
	}


	public function addJs($js)
	{
		$this->js[] = $js;
		$this->jsMinifier->add($js);
	}


	public function addMinifiedJs($js)
	{
		$this->js[] = $js;
		$this->jsMinifier->addMinified($js);
	}


	private function createCssFile()
	{
		$hash = '';
		foreach ($this->css as $css) {
			$hash = md5($hash . md5_file($css));
		}
		$cssName = 'css_' . $hash . '.css';
		if (!is_file($this->tempDir . '/' . $cssName)) {
			$this->saveCss($cssName);
		}
		return $cssName;
	}


	private function saveCss($cssName)
	{
		$this->cssMinifier->minify($this->tempDir . '/' . $cssName);
	}


	private function createJsFile()
	{
		$hash = '';
		foreach ($this->js as $js) {
			$hash = md5($hash . md5_file($js));
		}
		$jsName = 'js_' . $hash . '.js';
		if (!is_file($this->tempDir . '/' . $jsName)) {
			$this->saveJs($jsName);
		}
		return $jsName;
	}


	private function saveJs($jsName)
	{
		$this->jsMinifier->minify($this->tempDir . '/' . $jsName);
	}


	public function render()
	{
		$this->getTemplate()->css = '';
		$this->getTemplate()->js = '';

		$this->getTemplate()->css = $this->createCssFile();
		$this->getTemplate()->js = $this->createJsFile();

		$this->getTemplate()->setFile(str_replace('.php', '.latte', __FILE__));
		$this->getTemplate()->render();
	}

}
