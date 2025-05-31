# export-secret-mikrotik
Export Secret (PPP/Hotspot) Mikrotik RoS versi 7

Aplikasi ini di buat untuk para penggunakan mikrotik yang kebingungan ketika mengexport ke file .rsc secret dari ppp/hotspot yang mana passwordnya menghilang.
Oleh karena itu, ijin saya berkontribusi membuat sebuah aplikasi yang memudahkan pengguna untuk export file .rsc melalui API Mikrotik. Data ini akan di export ke file berbentuk rsc atau excel
Dan aplikasi ini tidak akan menyimpan kredensial dari pengguna, karena aplikasi ini bersifat local. sehingga bisa dipasang di localhost pribadi.

Untuk menggunakan aplikasi ini, ada beberapa syarat yang harus dipenuhi sebagai berikut :

1. Pastikan port API di router sudah diaktifkan,
2. IP Wajib bisa diping dari server aplikasi, baik itu public atau lokal,
3. Pastikan gunakan PHP terbaru,
4. Pastikan tidak memblock download di browser.

sekian terima kasih.
