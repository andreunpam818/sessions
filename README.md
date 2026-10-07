# Program Pengiriman
Program PHP sederhana untuk menentukan jenis pengiriman
berdasarkan total order dan lokasi customer.

# Business Rules
- Total order <= 0 Invalid Order
- Total order >= Rp500.000 dan lokasi Jakarta Priority Delivery
- Total order >= Rp300.000 Free Standard Delivery
- Selain itu Regular Delivery Shipping Fee Rp20.000

# Yang dipakai di rule.php
- Comparison operator: `<=`, `>=`, `=`
- Logical operator: `&&`
- if / elseif / else (4 decision branches)

# Test Scenario

Expected Result ditulis sebelum program dijalankan.
Setelah program dijalankan, Expected Result dibandingkan dengan Actual Result.

Scenarios -1 (Ordinary) 550000 Jakarta = Hasil Sama
Scenarios -2 (Ordinary) 400000 Bandung = Hasil Sama
Scenarios -3 (Ordinary) 100000 Jakarta = Hasil Sama
Scenarios -4 (Boundary) 500000 Jakarta = Hasil Sama 
Scenarios -5 (Boundary) 499999 | Jakarta Hasil Sama
Scenarios -6 (Boundary) 300000 | Bandung Hasil Sama

# Kesimpulan
Semua scenario hasilnya sama antara Expected Result dan Actual Result.

