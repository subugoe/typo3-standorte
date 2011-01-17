<?php

class Tx_Standorte_ViewHelpers_TypolinkViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	private $url;

	/**
	 * Renders a Typolink with title etc
	 *
	 * @param string $typolink	Typolink to be processes
	 * @param string $linktext	Text um den Link
	 */
	public function render($typolink, $linktext) {


		$args = $this->renderArguments($typolink);

		$url = '<a href="' . $this->url . '"' . $args . '>' . $linktext . '</a>';

		return $url;
	}

	/**
	 * OMFG - Can't believe I really had to do this
	 * Splitting all arguments
	 * @param <type> $typolink
	 * @return string
	 */
	private function renderArguments($typolink) {

		$args = '';

		$linksplit = explode(' ', urldecode($typolink));

		$this->url = 'http://' . trim($linksplit[0]);

		$target = trim($linksplit[1]);

		$linksplit[1] != '-' ? $args .= ' target="' . trim($linksplit[1]) . '"' : $args;

		$linksplit[2] != '-' ? $args .= ' class="' . trim($linksplit[2]) . '"' : $args;

		$title = explode('"', $typolink);

		$title[1] != '-' ? $args .= ' title="' . $title[1] . '"' : $args;

		return $args;
	}

}

?>