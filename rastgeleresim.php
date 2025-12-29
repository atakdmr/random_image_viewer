<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastgele Resim Gösterici</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 30px;
        }
        .image-container {
            margin: 20px 0;
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #ddd;
            border-radius: 8px;
            background: #fafafa;
        }
        .image-container img {
            max-width: 100%;
            max-height: 500px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .refresh-btn {
            background-color: #007bff;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }
        .refresh-btn:hover {
            background-color: #0056b3;
        }
        .info {
            color: #666;
            margin-top: 20px;
            font-size: 14px;
        }
        .no-images {
            color: #dc3545;
            font-size: 18px;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎲 Rastgele Resim Gösterici</h1>
        
        <?php
        // Resimlerin bulunduğu klasör
        $imageFolder = 'images/';
        
        // Desteklenen resim formatları
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];
        
        // Klasördeki resimleri listele
        $images = [];
        
        if (is_dir($imageFolder)) {
            $files = scandir($imageFolder);
            
            foreach ($files as $file) {
                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($extension, $allowedExtensions) && $file !== '.' && $file !== '..') {
                    $images[] = $file;
                }
            }
        }
        
        // Rastgele resim seç ve göster
        if (!empty($images)) {
            $randomImage = $images[array_rand($images)];
            $imagePath = $imageFolder . $randomImage;
            $imageInfo = getimagesize($imagePath);
            $fileSize = round(filesize($imagePath) / 1024, 2); // KB
            ?>
            
            <div class="image-container">
                <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                     alt="<?php echo htmlspecialchars($randomImage); ?>">
            </div>
            
            <div class="info">
                <strong>Resim Bilgileri:</strong><br>
                Dosya: <?php echo htmlspecialchars($randomImage); ?><br>
                Boyut: <?php echo $imageInfo[0]; ?>x<?php echo $imageInfo[1]; ?> piksel<br>
                Dosya Boyutu: <?php echo $fileSize; ?> KB<br>
                Toplam Resim Sayısı: <?php echo count($images); ?>
            </div>
            
            <?php
        } else {
            echo '<div class="no-images">';
            echo '❌ <strong>Resim bulunamadı!</strong><br>';
            echo 'Lütfen "' . htmlspecialchars($imageFolder) . '" klasörüne resim dosyaları ekleyin.<br>';
            echo 'Desteklenen formatlar: JPG, PNG, GIF, BMP, WEBP';
            echo '</div>';
        }
        ?>
        
        <button class="refresh-btn" onclick="location.reload()">🔄 Yeni Resim Göster</button>
        
        <div class="info">
            <p>Sayfayı yeniledikçe veya butona tıkladıkça rastgele bir resim gösterilir.</p>
        </div>
    </div>
</body>
</html>