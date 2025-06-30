<?php


namespace acsantanamx\NCursesUI;


class Terminal {
    /**
     * @param $keycode
     * @return int
     */
    public function hasKey($keycode) {
        return ncurses_has_key($keycode);
    }

    /**
     * @return bool
     */
    public function hasColors() {
        return ncurses_has_colors();
    }

    /**
     * @return bool
     */
    public function hasIC() {
        return ncurses_has_ic();
    }

    /**
     * @return bool
     */
    public function hasIL() {
        return ncurses_has_il();
    }

    public function allAtributes() {
        return ncurses_termattrs();
    }

    public function termName() {
        return ncurses_termname();
    }

    public function longName() {
        return ncurses_longname();
    }


}
