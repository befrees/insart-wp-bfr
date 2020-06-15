<?php


/**
 * ! Array helper
 */

class ArrayHelpers 
{

    /**
     * Converts an object or an array of objects into an array.
     * @param object|array|string $object the object to be converted into an array
     * @param array $properties a mapping from object class names to the properties that need to put into the resulting arrays.
     * The properties specified for each class is an array of the following format:
     *
     * ```php
     * [
     *     'app\models\Post' => [
     *         'id',
     *         'title',
     *         // the key name in array result => property name
     *         'createTime' => 'created_at',
     *         // the key name in array result => anonymous function
     *         'length' => function ($post) {
     *             return strlen($post->content);
     *         },
     *     ],
     * ]
     * ```
     *
     * The result of `ArrayHelper::toArray($post, $properties)` could be like the following:
     *
     * ```php
     * [
     *     'id' => 123,
     *     'title' => 'test',
     *     'createTime' => '2013-01-01 12:00AM',
     *     'length' => 301,
     * ]
     * ```
     *
     * @param bool $recursive whether to recursively converts properties which are objects into arrays.
     * @return array the array representation of the object
     */
    public static function toArray($object, $properties = array(), $recursive = true)
    {
        if (is_array($object)) {
            if ($recursive) {
                foreach ($object as $key => $value) {
                    if (is_array($value) || is_object($value)) {
                        $object[$key] = static::toArray($value, $properties, true);
                    }
                }
            }

            return $object;
        } elseif (is_object($object)) {
            if (!empty($properties)) {
                $className = get_class($object);
                if (!empty($properties[$className])) {
                    $result = array();
                    foreach ($properties[$className] as $key => $name) {
                        if (is_int($key)) {
                            $result[$name] = $object->$name;
                        } else {
                            $result[$key] = static::getValue($object, $name);
                        }
                    }

                    return $recursive ? static::toArray($result, $properties) : $result;
                }
            }
            if ($object instanceof Arrayable) {
                $result = $object->toArray(array(), array(), $recursive);
            } else {
                $result = array();
                foreach ($object as $key => $value) {
                    $result[$key] = $value;
                }
            }

            return $recursive ? static::toArray($result, $properties) : $result;
        } else {
            return array($object);
        }
    }
    /**
     * 
     * @param type $data
     * @param type $parent
     * @param type $id
     * @param type $parent_id
     * @param type $children
     * @return array
     */
    public static function arrayTree($data = array(), $parent=0, $id = 'id', $parent_id = 'parent', $children = 'child')
    {
        
        if (!$data) return array();
        $data = ArrayHelpers::index($data, $id);
        $array = $data;

        $tree = array(array($children => array()));

        if($parent){
            $tree = array(array($children => array($parent => $data[$parent])));
        } else {
            $tree = array(array($children => array()));
        }
        $references = array(&$tree[0]);
        foreach ($array as $item) {
            if (isset($references[$item[$id]])) {
                $item[$children] = $references[$item[$id]][$children];
            } else {
//                continue;
            }

            $references[$item[$parent_id]][$children][$item[$id]] = $item;
            $references[$item[$id]] =&$references[$item[$parent_id]][$children][$item[$id]];

        }
        // dd($references);
        return $references[$parent][$children];
    }
    
    public static function index($array, $key, $groups = array())
    {
        $result = array();
        $groups = (array)$groups;

        foreach ($array as $element) {
            $lastArray = &$result;

            foreach ($groups as $group) {
                $value = static::getValue($element, $group);
                if (!array_key_exists($value, $lastArray)) {
                    $lastArray[$value] = array();
                }
                $lastArray = &$lastArray[$value];
            }

            if ($key === null) {
                if (!empty($groups)) {
                    $lastArray[] = $element;
                }
            } else {
                $value = static::getValue($element, $key);
                if ($value !== null) {
                    if (is_float($value)) {
                        $value = (string) $value;
                    }
                    $lastArray[$value] = $element;
                }
            }
            unset($lastArray);
        }

        return $result;
    }
    /**
     * 
     * @param type $array
     * @param type $key
     * @param type $default
     * @return type
     */
    public static function getValue($array, $key, $default = null)
    {
        if ($key instanceof \Closure) {
            return $key($array, $default);
        }

        if (is_array($key)) {
            $lastKey = array_pop($key);
            foreach ($key as $keyPart) {
                $array = static::getValue($array, $keyPart);
            }
            $key = $lastKey;
        }

        if (is_array($array) && (isset($array[$key]) || array_key_exists($key, $array)) ) {
            return $array[$key];
        }

        if (($pos = strrpos($key, '.')) !== false) {
            $array = static::getValue($array, substr($key, 0, $pos), $default);
            $key = substr($key, $pos + 1);
        }

        if (is_object($array)) {
            // this is expected to fail if the property does not exist, or __get() is not implemented
            // it is not reliably possible to check whether a property is accessible beforehand
            return $array->$key;
        } elseif (is_array($array)) {
            return (isset($array[$key]) || array_key_exists($key, $array)) ? $array[$key] : $default;
        } else {
            return $default;
        }
    }
    
    
    /**
     * Returns the values of a specified column in an array.
     * The input array should be multidimensional or an array of objects.
     *
     * For example,
     *
     * ```php
     * $array = [
     *     ['id' => '123', 'data' => 'abc'],
     *     ['id' => '345', 'data' => 'def'],
     * ];
     * $result = ArrayHelper::getColumn($array, 'id');
     * // the result is: ['123', '345']
     *
     * // using anonymous function
     * $result = ArrayHelper::getColumn($array, function ($element) {
     *     return $element['id'];
     * });
     * ```
     *
     * @param array $array
     * @param string|\Closure $name
     * @param bool $keepKeys whether to maintain the array keys. If false, the resulting array
     * will be re-indexed with integers.
     * @return array the list of column values
     */
    public static function getColumn($array, $name, $keepKeys = true)
    {
        $result = array();
        if ($keepKeys) {
            foreach ($array as $k => $element) {
                $result[$k] = static::getValue($element, $name);
            }
        } else {
            foreach ($array as $element) {
                $result[] = static::getValue($element, $name);
            }
        }

        return $result;
    }
    
     public static function map($array, $from, $to, $group = null)
    {
        $result = array();
        foreach ($array as $element) {
            $key = static::getValue($element, $from);
            $value = static::getValue($element, $to);
            if ($group !== null) {
                $result[static::getValue($element, $group)][$key] = $value;
            } else {
                $result[$key] = $value;
            }
        }

        return $result;
    }
    
}


function array_tree($array, $id = 'id', $parent_id = 'parent', $children = 'child') {
    dd($id);
    $array = ArrayHelpers::index($array, $id);
     $tree = array(array($children => array()));
//        if($parent_id){
//            $tree = array(array($children => array($parent => $tree[$parent_id])));
//        }
        $references = array();

    foreach($array as $item) {
        if(isset($references[$item[$id]])) {
            $item[$children] = $references[$item[$id]][$children];
        }

        $references[$item[$parent_id]][$children][] = $item;
        $references[$item[$id]] =& $references[$item[$parent_id]][$children][count($references[$item[$parent_id]][$children]) - 1];
//    dd($tree);
    }
//    dd(array_slice($references,1, 1));
    dd($out);
    $out = array_slice($references,1, 1);
    return $out[0][$children];
    return $tree[0][$children];
}
 function flat2tree($array, $id = 'id', $parent_id = 'parent', $children = 'child')
{
    $array = ArrayHelpers::index($array, 'id');
    $tree = array();
    $tree[] = array($children => array());
    $references = array();
    //
    foreach ($array as $item) {
        if (isset($references[$item[$id]])) $item[$children] = $references[$item[$id]][$children];
        if (!isset($references[$item[$parent_id]])) $references[$item[$parent_id]] = &$tree[0];
        //
        $references[$item[$parent_id]][$children][] = $item;
        $references[$item[$id]] = &$references[$item[$parent_id]][$children][count($references[$item[$parent_id]][$children]) - 1];
    }
    return $tree[0][$children];
}

function getLastLevel($tree, &$out=array(), $child_id='child'){
    if(!$tree) return $out;
    foreach($tree as $item){
        if(!isset($item[$child_id]) || !$item[$child_id]){
            $out[] = $item;
        }
        else {
            getLastLevel($item[$child_id], $out);
        }
    }
    return $out;
}
/**
 *! END Array helper
 */