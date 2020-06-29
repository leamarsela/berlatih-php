<?php

$data = array(
    array('Indonesia', 'emas'),
    array('Italia', 'perak'),
    array('Korea Selatan', ),
    array('India', 'perak'),
    array('India', 'emas'),
    array('Indonesia', 'perak'),
    array('Indonesia', 'emas'),
);


function perolehan_medali($arr) {
    $proc_number = 0;

    if ($arr == []) return 'no data';
    else {
        $proc[0] = array('negara' => $arr[0][0], 'emas' => 0, 'perak' => 0, 'perunggu' => 0);
        $proc_number++;

        for ($i = 0; $i < count($arr); $i++) {
            $not = false;

            for ($j = 0; $j < $proc_number; $j++) {
                if ($proc[$j]['negara'] != $arr[$i][0]) $not = true;
                else {
                    $not = false;
                    break;
                }
            }

            if ($not) {
                $proc[$proc_number] = array('negara' => $arr[$i][0], 'emas'=>0, 'perak'=>0, 'perunggu'=>0);
                $proc_number++;
            }
        }

        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < $proc_number; $j++) {
                if ($proc[$j]['negara'] == $arr[$i][0]) {
                    if($arr[$i][1] == 'emas') $proc[$j]['emas']++;
                    elseif ($arr[$i][1] == 'perak') $proc[$j]['perak']++;
                    elseif ($arr[$i][1] == 'perunggu') $proc[$j]['perunggu']++; 
                }
            }
        }
    }

    return $proc;
}


print_r (perolehan_medali($data));


?>