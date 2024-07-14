<?php


use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../src/questions/designer-pdf-viewer.php';

class DesignerPdfViewerTest extends TestCase {

    public function testDesignerPdfViewer() {
        $this->assertEquals(9, designerPdfViewer([1,3,1,3,1,4,1,3,2,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5], 'abc'));
    }
}
