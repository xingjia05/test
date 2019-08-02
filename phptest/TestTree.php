<?php
/**
 * $list 数组转化成森林
 * $pk key
 * $pid parentId
 * */
function arrayToForest($list, $pk, $pid, $child = 'children') {
    $tree = array();
    if (!is_array($list)) {
	return $tree;
    }
    $refer = array();
    $parentNodeIdArr = [];
    foreach ($list as $key => $data) {
        $refer[$data[$pk]] = &$list[$key];
        $parentNodeIdArr[$data[$pid]] = $data[$pid];
    }
    /* 寻找根结点 */
    foreach ($list as $key => $data) {
        if (in_array($data[$pk], $parentNodeIdArr)) {
            unset($parentNodeIdArr[$data[$pk]]);
        }
    }
    foreach ($list as $key => $data) {
        $parantId = $data[$pid];
        if (in_array($parantId, $parentNodeIdArr)) {
            $tree[] = &$list[$key];
        } else {
            if (isset($refer[$parantId])) {
                $parent = &$refer[$parantId];
                $parent[$child][] = &$list[$key];
            }
        }
    }
    return $tree;
}

$list = [
    ['id' => 6, 'pid' => 0],
    ['id' => 1, 'pid' => 0],
    ['id' => 2, 'pid' => 1],
    ['id' => 3, 'pid' => 2],
    ['id' => 4, 'pid' => 1],
    ['id' => 5, 'pid' => 2],
];

$tree = arrayToForest($list, 'id', 'pid', 'children');
print_r($tree);die;
print_r($list);die;
