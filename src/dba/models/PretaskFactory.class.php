<?php

namespace DBA;

class PretaskFactory extends AbstractModelFactory {
  function getModelName() {
    return "Pretask";
  }
  
  function getModelTable() {
    return "Pretask";
  }
  
  function isCachable() {
    return false;
  }
  
  function getCacheValidTime() {
    return -1;
  }
  
  /**
   * @return Pretask
   */
  function getNullObject() {
    $o = new Pretask(-1, null, null, null, null, null, null, null, null, null, null, null);
    return $o;
  }
  
  /**
   * @param string $pk
   * @param array $dict
   * @return Pretask
   */
  function createObjectFromDict($pk, $dict) {
    $o = new Pretask($dict['pretaskId'], $dict['taskName'], $dict['attackCmd'], $dict['chunkTime'],
        $dict['statusTimer'], $dict['color'], $dict['isSmall'], $dict['isCpuTask'], $dict['useNewBench'],
        $dict['priority'], $dict['isMaskImport'], $dict['crackerBinaryTypeId'], $dict['createTime'],
        $dict['sbis_count'], $dict['hashlistId'], $dict['algorithmCode'],
        $dict['status'], $dict['sbis_adr'],
        $dict['chunkSize'], $dict['benchmarkType'], $dict['skipKeyspace'], $dict['keyspace'], $dict['dispatched'],
        $dict['files'], $dict['searched'], $dict['chunkIds'], $dict['agents'], $dict['agents_id'], $dict['agents_benchmark'],
        $dict['agents_speed'], $dict['chunks'],  $dict['use_preprocessor'], $dict['preprocessor_id'], $dict['preprocessor_command'],
        $dict['preprocessor_speed'], $dict['skip'], $dict['result']);
    return $o;
  }
  
  /**
   * @param array $options
   * @param bool $single
   * @return Pretask|Pretask[]
   */
  function filter($options, $single = false) {
    $join = false;
    if (array_key_exists('join', $options)) {
      $join = true;
    }
    if ($single) {
      if ($join) {
        return parent::filter($options, $single);
      }
      return Util::cast(parent::filter($options, $single), Pretask::class);
    }
    $objects = parent::filter($options, $single);
    if ($join) {
      return $objects;
    }
    $models = array();
    foreach ($objects as $object) {
      $models[] = Util::cast($object, Pretask::class);
    }
    return $models;
  }
  
  /**
   * @param string $pk
   * @return Pretask
   */
  function get($pk) {
    return Util::cast(parent::get($pk), Pretask::class);
  }
  
  /**
   * @param Pretask $model
   * @return Pretask
   */
  function save($model) {
    return Util::cast(parent::save($model), Pretask::class);
  }
}