<?php

class Dates {
    static public function convertDateTypesToDB($date){
        if ($date == "NOW()") return $date;

		if (DateTime::createFromFormat('d/m/Y', $date) !== false)
        {
            $date = DateTime::createFromFormat('d/m/Y', $date);

            $date = $date->format('m/d/Y');

            return date('Y-m-d', strtotime($date));
        }
        elseif (DateTime::createFromFormat('m/d/Y', $date) !== false)
        {
            $date = DateTime::createFromFormat('m/d/Y', $date);

            return date('Y-m-d', strtotime($date));
        }
        elseif (DateTime::createFromFormat('Y-m-d', $date) !== false)
        {
            return date('Y-m-d', strtotime($date));
        }
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