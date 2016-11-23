<?php

class Dates {
    static public function convertDateTypesToDB($date){
        if ($date == "NOW()") return $date;

		$date = DateTime::createFromFormat('d/m/Y', $date);

		$date = $date->format('m/d/Y');

		return date('Y-m-d', strtotime($date));
	}

	static public function convertDataTypesToView($objects){
		if (is_array($objects)) foreach ($objects as $object) {
			if (isset($object->start_at)) $object->start_at = date('d/m/Y', strtotime($object->start_at));
			if (isset($object->finish_at)) $object->finish_at = date('d/m/Y', strtotime($object->finish_at));
			if (isset($object->returned_at)) $object->returned_at = date('d/m/Y', strtotime($object->returned_at));
            if (isset($object->created_at)) $object->returned_at = date('d/m/Y', strtotime($object->created_at));
		}
		return $objects;
	}
}
