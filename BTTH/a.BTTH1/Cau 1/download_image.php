<?php
function downloadImages($imageUrls, $saveDir) {
    foreach ($imageUrls as $index => $url) {
        $imageData = file_get_contents($url);
        $fileName = $saveDir . '/flower_' . $index . '.jpg';
        file_put_contents($fileName, $imageData);
    }
}

// URL của ảnh các loài hoa
$imageUrls = [
    // Thêm URL ảnh của 14 loại hoa tại đây
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_a9e829b23e.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_3195301467.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_dfa5e9fafb.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_ed0c78b472.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_57208fe381.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_3fc1677988.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_74fb9e466d.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_6b5946b42d.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_4bb8bbbabe.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_5dd50456db.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_3e2b5b8e00.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_664a026835.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_42f69a9c86.jpg",
    "https://afamilycdn.com/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/03/14-loai-hoa-tuyet-dep-thich-hop-trong-de-khoe-huong-sac-dip-xuan-he_581290477e.jpg",
];

// Tải về thư mục "images/"
$saveDir = "BTTH/Flowers/images";
if (!is_dir($saveDir)) {
    mkdir($saveDir, 0777, true);
}
downloadImages($imageUrls, $saveDir);
?>
