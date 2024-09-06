<?php
header('Content-Type: application/json');
if(isset($_GET['file']) && !empty($_GET['file'])){
    $file_name = $_GET['file'];
    if ($file_name == 'shu_tu_beijing_intro.webp'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1711161710986/shu_tu_beijing_intro.webp');
    } else if ($file_name == 'wei_xing_ying_xiang.webp'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1711163313253/wei_xing_ying_xiang.webp');
    } else if ($file_name == 'zhong_zhou_xian.jpeg'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1711184749839/zhong_zhou_xian.jpeg');
    } else if ($file_name == 'bei_jing_kao_ya.jpeg'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1711184756359/bei_jing_kao_ya.jpeg');
    } else if ($file_name == 'tian_an_men.jpeg'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1711849680961/tian_an_men.jpeg');
    } else if ($file_name == 'gu_gong.webp'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1711849946249/gu_gong.webp');
    } else if ($file_name == 'bei_jing_map.webp'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1717480282412/0eb30f2442a7d9339a4e5a19a14bd11372f001f1.webp');
    } else if ($file_name == 'bei_jing_qv.webp'){
        header('Location: https://fs-im-kefu.7moor-fs1.com/ly/4d2c3f00-7d4c-11e5-af15-41bf63ae4ea0/1717480738531/30adcbef76094b36acaf367ce79a6bd98d1001e9375e.webp');
    }
} else {
    echo '{"code":200,"message":"No such file!"}';
}
