<?php
/**
 * Created by PhpStorm.
 * User: tkaneda
 * Date: 2017/02/13
 * Time: 17:02
 */
try {
    $uploads_dir = './img1';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!isset($_FILES['file']['error']) || !is_int($_FILES['file']['error'])) {
            throw new RuntimeException('パラメータが不正です。');
        }

        // $_FILES['upfile']['error'] の値を確認
        switch ($_FILES['file']['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException('ファイルサイズが大き過ぎます。');
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('ファイルが選択されていません。');
            default:
                throw new RuntimeException('その他エラーが発生しました。');
        }

        // ファイルサイズの確認
        if ($_FILES['upfile']['size'] > 1000000) {
            throw new RuntimeException('ファイルサイズが大きすぎます');
        }

        // ファイル形式制限の定義
        $array_type = array(
            'gif' => 'image/gif',
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
        );
        // ファイルの MIME Content-type を取得
        $file_type = mime_content_type($_FILES['file']['tmp_name']);
        // ファイル形式の確認
        if (!array_search($file_type, $array_type)) {
            throw new RuntimeException('ファイル形式が不正です。');
        }

        // 乱数値を利用して、ファイルの重複を避ける
        $file_name = mt_rand() . $_FILES['file']['name'];
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $uploads_dir . '/' . $file_name)) {
            throw new RuntimeException('ファイル保存時にエラーが発生しました');
        }

        echo 'アップロード完了';
    }

} catch (Exception $e) {
    echo 'エラー:' . $e->getMessage() . PHP_EOL;
}

?>

<form action="normal_post1.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ファイルをアップロードをする">
</form>
