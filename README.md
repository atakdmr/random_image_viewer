# Rastgele Resim Gösterici

Bugün "rastgele resim gösterici" web uygulaması üzerinde çalıştım. Proje kapsamında, PHP kullanarak bir klasör içerisinde bulunan resimleri sunucu tarafında tarayan ve sayfa her yenilendiğinde bu resimler arasından rastgele bir tanesini kullanıcıya gösteren bir web sayfası geliştirdim.

## Proje Detayları

### İlk Aşama: Proje Dizin Yapısı
Proje dizin yapısını oluşturarak resimlerin tutulacağı klasörü belirledim.

### PHP Dosya Sistemi İşlemleri
PHP dosya sistemi fonksiyonlarını kullanarak (opendir, readdir, scandir) klasör içerisindeki resim dosyalarını listeledim ve yalnızca geçerli görsel formatlarının (jpg, png vb.) işlenmesi için filtreleme yaptım.

### Rastgele Seçim Mekanizması
Elde edilen resim listesinden rastgele bir dosya seçerek sayfa üzerinde görüntülenmesini sağladım. Sayfa her yenilendiğinde farklı bir görsel gösterilecek şekilde rastgelelik mantığını kurguladım.

### Hata Kontrolleri
Uygulamanın hatasız çalışması için klasörün boş olması, dosya okunamaması veya geçersiz dosya türleri gibi durumlarda kontrol yapıları ekledim. Farklı resim sayılarıyla testler yaparak uygulamanın kararlı şekilde çalıştığını doğruladım.

## Öğrenimler
Bu proje sayesinde PHP dosya sistemi işlemleri ve temel web mantığı hakkında pratik deneyim kazandım.

## Kullanılan Teknolojiler ve Araçlar
- **Dil:** PHP
- **Markup:** HTML
- **PHP Fonksiyonları:** Dosya sistemi fonksiyonları (opendir, readdir, scandir)
- **Web Sunucusu:** Apache
- **Geliştirme Ortamı:** Visual Studio Code
