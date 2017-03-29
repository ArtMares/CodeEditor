<?php

/**
 * @author              Dmitriy Dergachev (ArtMares)
 * @date                29.03.2017
 * @copyright           artmares@influ.su
 */
class LineNumberArea extends QWidget {
    
    protected $editor;

    public function __construct($editor) {
        parent::__construct($editor);
        $this->editor = $editor;
    }
    
    public function sizeHint() {
        return new QSize($this->editor->lineNumberAreaWidht(), 0);
    }
    
    /** @override paintEvent */
    public function paintEvent($event) {
        $this->editor->lineNumberAreaPaintEvent($event);
    }
}