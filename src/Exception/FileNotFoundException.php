<?php

namespace iblamefish\baconiser\Exception;

class FileNotFoundException extends BaconiserException {
  public function __construct($exception) {
    parent::__construct($exception);
  }
}
