<?php

namespace Wattanar;

class SqlsrvHelper
{
	public function getRow($query) {
    return \sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
	}
	
	public function getRows($query) {
    $data = [];
    while($f = \sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
      $data[] = $f;
    }
    return $data;
  }
}
