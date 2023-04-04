<?php
namespace CloudStorage\filesystem\files\contracts\images;
use \CloudStorage\filesystem\files\contracts\ImageContracts;
class Jpeg implements ImageContracts {
    function getDimension() {
        return "100x100";
    }
}