<?php
// 检查是否有POST请求  
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['content'])) {
    //获取上级目录
    $localPath = __DIR__;

    // 获取POST请求中的数据
    $comment = $_POST['content'];
    //判断是不是第一条评论
    $commentFilePath = $localPath . '/comments.json';
    if (!file_exists($commentFilePath)) {
        file_put_contents($commentFilePath, '[]');
    }
    $jsonData = file_get_contents($commentFilePath);
    $data = json_decode($jsonData);
    $new_comment = array('comment' => $comment);
    array_unshift($data, $new_comment);
    $newJsonData = json_encode($data);
    file_put_contents($commentFilePath, $newJsonData);

    $response = array("success" => true);
    $jsonResponse = json_encode($response);

} else {
    $response = array("success" => false);
    $jsonResponse = json_encode($response);
}
// 设置响应头并给出回应
header('Content-Type: application/json');
echo $jsonResponse;
