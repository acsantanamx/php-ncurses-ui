<?php
namespace acsantanamx\NCursesUI;

/**
 * A window object that implements functionality for ncurses window resource
 * @author wapmorgan (wapmorgan@gmail.com)
 */
class Draw {
	
	const BORDER_STYLE_SOLID = 1; // ┐
	const BORDER_STYLE_DOUBLE = 2; // ╗
	const BORDER_STYLE_BLOCK = 3; // ■
	
	/**
	 * Create a window
	 *
	 * @param int $cols
	 * @param int $rows
	 * @param int $x
	 * @param int $y
	 */
	public function __construct( ) {
		
	}

	/**
	 * Destructs a window and associated panel
	 */
	public function __destruct() {

	}

	public function hline($x_, $y_, $width_, $chr_) {

		ncurses_mvhline($y_, $x_, ord($chr_), $width_);

	}

	public function vline($x_, $y_, $height_, $chr_) {

		ncurses_mvvline($y_, $x_, ord($chr_), $height_);

	}

	public function refresh() {
		ncurses_refresh();
	}

}
