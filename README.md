<img width="255" alt="Cuplikan layar 2024-03-19 204305" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/0c9d4f1f-c94d-4bae-b55f-9d85b93f7892">
<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PHP DASAR
> - PHP adalah singkatan dari PHP Hypertext Preprocessor, diciptakan pertama kali oleh Rasmus Lerdorf pada tahun 1995.
> - PHP file kode program selalu diakhiri dengan extension .php
> - Kode program PHP harus dimulai dengan tag pembuka yaitu seperti :
>
>    <img width="170" alt="Cuplikan layar 2024-03-19 194732" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/66ecbd63-30bb-4254-bc0f-fe120d15d6a6">

---
> #### OPEN SOURCE
>
> - PHP adalah bahasa pemrograman yang opensource
> - Kita dapat download PHP di website php.net
> - Atau bisa liat source code nya di halaman github [php](https://github.com/php/php-src).
---
> #### TIPE DATA NUMBER
> Di PHP terdapat 2 jenis tipe data number yaitu :
> - (int) Bilangan bulat decimal (base 10),hexadecimal (base 16), octa (base 8), binary (base 2)
> - (float) Bilangan pecahan
> 
> Underscore (_) dapat ditambahkan untuk memudahkan pembacaan angka dalam kode program PHP.
> 
> Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka.
>
> Berikut kode Tipe Data Integer :
> 
> <img width="229" alt="Cuplikan layar 2024-03-19 195011" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ff416e6d-d80e-42a4-974e-95508b299d05">

---
> Berikut kode Tipe Data Floating Point :
> - Floating-point dalam PHP menggunakan titik (.) untuk menambahkan koma, dan dapat menggunakan notasi ilmiah (contoh: E3) untuk angka besar atau kecil.
> 
> <img width="463" alt="Cuplikan layar 2024-03-19 195123" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c933a797-377e-42a8-b7da-fdf9295e9637">
---
> #### INTEGER OVERFLOW
> - Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
> - Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point.
> Berikut kode Interget Overflow :
>
> <img width="246" alt="Cuplikan layar 2024-03-19 195419" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/13d9d16f-6be8-47cc-b5cf-4da89b393eb7">

---
> #### TIPE DATA BOOLEAN
> - Tipe data boolean adalah tipe data paling sederhana di PHP
> - Tipe data boolean dalam PHP hanya memiliki dua nilai, yaitu true atau false, dan bersifat case-insensitive.
>
> Berikut kode Tipe Data Boolean :
>
> <img width="156" alt="Cuplikan layar 2024-03-19 195605" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/396ccff9-138d-4e45-bfdd-f9626819d441"> 
---
> #### TIPE DATA STRING
> - Tipe data string adalah representasi dari teks atau tulisan dalam PHP dan dapat mengandung kosong atau banyak karakter.
>   
> Berikut kode tipe data string single quote :
>
> <img width="226" alt="Cuplikan layar 2024-03-19 195837" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/7027709e-3508-4d51-ad04-940669fa6d7d">
>
> - Selain single quote, kita juga bisa menggunakan double quote. Salah satu kelebihan menggunakan double quote adalah kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER, \t untuk TAB, " untuk double quote, dan lain-lain
>
> Berikut kode tipe data string double quote :
>
> <img width="257" alt="Cuplikan layar 2024-03-19 195934" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/8d027b1c-c509-453a-8a84-81eb16566bf4"> 
---
> #### Multiline String
> - Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan \n sebagai ENTER
> - Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc.
>
> #### HERODOC
> - Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab dan yang lain-lain secara manual
> 
> Berikut kode tipe data string Heredoc :
>
> <img width="286" alt="Cuplikan layar 2024-03-19 200037" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fb221219-0546-4796-828f-cbfb2fe8fd83">
>
> #### NOWDOC
> - Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote.
>
> Berikut kode tipe data string Nowdoc :
>
> <img width="286" alt="Cuplikan layar 2024-03-19 200126" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/01ca1adb-7a72-4c89-a8b7-366282e51b85">
---
> #### VARIABLE
> - Variabel di PHP dapat diubah tipe datanya secara dinamis, seperti dari string menjadi integer.
> - Penamaan variable tidak boleh mengandung spasi
>
> Berikut kode variable :
>
> <img width="133" alt="Cuplikan layar 2024-03-19 200302" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a6cdf2ed-afba-4a04-a387-ce5c73b440b5">
>
> #### VARIABLE VARIABLES
> - PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
> - Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya
>
> Berikut kode variable variables :
>
> <img width="159" alt="Cuplikan layar 2024-03-19 200429" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b32cb08a-5e67-443a-b287-0e305bc6b95e">
---
> #### CONSTANT
> - Variabel di PHP memiliki sifat mutable, artinya bisa diubah nilainya. Constant, di sisi lain, memiliki sifat immutable, yang artinya nilainya tidak bisa diubah setelah deklarasi.
> - Untuk membuat constant kita bisa menggunakan function define()
> - Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
>
> Berikut kode constant :
> 
> <img width="300" alt="Cuplikan layar 2024-03-19 200615" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ac66dab3-4616-44f1-a8c9-eb3ed02c57e8">
---
> #### DATA NULL
> - Null dalam PHP digunakan untuk merepresentasikan sebuah variabel tanpa nilai. Penggunaan is_null() dapat digunakan untuk mengecek apakah sebuah variabel kosong atau null.
> - Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
>
> Berikut kode null :
>
> <img width="130" alt="Cuplikan layar 2024-03-19 200718" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/e96accf0-8573-4b74-96db-0b0fc4f77d70">
>
> Berikut kode untuk mengecek null :
>
> <img width="185" alt="Cuplikan layar 2024-03-19 200725" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2f1a5c0b-2b8c-470d-984d-8c2b3c466abf">
>
> #### MENGHAPUS VARIABLE
> - Function unset() digunakan untuk menghapus variabel dalam PHP. Namun hati-hati, variabel yang dihapus dengan unset() tidak bisa lagi diakses dan bahkan tidak dapat diketahui keberadaannya menggunakan is_null().
> - Penggunaan isset lebih aman daripada is_null untuk memeriksa apakah variabel ada dan nilainya tidak nol.
> 
> Berikut kode untuk menghapus variable dan isset :
>
> <img width="150" alt="Cuplikan layar 2024-03-19 200826" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/692a9fcb-2fc9-4302-afd6-165948d9727a">
---
> #### TIPE DATA ARRAY
> - Tipe data array di PHP memungkinkan untuk menyimpan kumpulan data dengan jenis yang berbeda-beda.
> - Array di PHP memiliki panjang yang dinamis, memungkinkan penambahan data sebanyak-banyaknya tanpa batasan.
> - Array dapat dibuat menggunakan kata kunci array atau kurung kotak, dengan fleksibilitas dalam jenis data yang dimasukkan.
>
> Berikut kode untuk membuat array :
>
> <img width="295" alt="Cuplikan layar 2024-03-19 200933" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/46df7034-fa51-4e95-bb70-746190d040f1">
>
> #### OPERASI ARRAY
> - Operasi umum pada array meliputi mengakses, mengubah, menambah, dan menghapus data menggunakan indeks.
>
> Berikut kode operasi array :
>
> <img width="184" alt="Cuplikan layar 2024-03-19 200951" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/97171c4a-c2b1-48fc-ab6e-71514a4da589">
>
> #### ARRAY SEBAGAI MAP
> - Di banyak bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value.
> - Namun di PHP, Map dapat dibuat menggunakan Array.
> - secara default, Array akan menggunakan indeks (nomor) sebagai key dan value-nya, dan Anda bebas memasukkan data ke dalam Array.
> - Namun Jika Anda ingin, Anda juga dapat mengubah indeks-nya menjadi tipe data lain, seperti string, yang membuat Array di PHP mirip dengan Map di bahasa pemrograman lain.
>
> Berikut kode membuat map :
> 
> <img width="215" alt="Cuplikan layar 2024-03-19 201323" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a495270a-e256-40ef-a2f9-3017de5049e9">
>
> #### ARRAY DALAM ARRAY
> - Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
> - Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
>
> Berikut kode array di dalam array :
>
> <img width="240" alt="Cuplikan layar 2024-03-19 201430" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/7642b181-1b78-40e7-ba67-ef0c2b0c95d0">
---
> #### OPERATOR ARITMATIKA
> - Operator aritmatika di PHP mendukung operasi matematika dasar seperti penambahan, pengurangan, perkalian, pembagian, sisa bagi, dan perpangkatan.
>
> Berikut kode operator aritmatika :
>
> <img width="204" alt="Cuplikan layar 2024-03-19 201525" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a27371ed-8d2b-4e18-b365-76e335f62dd1">
>
> #### OPERATOR PENUGASAN
> - Operator penugasan di PHP, seperti +=, dapat digunakan untuk operasi aritmatika yang singkat dan mempersingkat penulisan kode.
>
> Berikut kode operator penugasan :
>
> <img width="176" alt="Cuplikan layar 2024-03-19 201551" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/9b1bc27e-bd84-4fdb-9bd5-181ab0750bf6">
>
> #### OPERATOR PERBANDINGAN
> -  Operator perbandingan di PHP digunakan untuk membandingkan nilai atau tipe data, mengembalikan nilai true jika perbandingannya benar dan false jika salah.
> -  Contoh penggunaan operator perbandingan seperti ```==```, ```===```, ```<```, ```<=```, ```>```, dan ```>=``` untuk membandingkan nilai atau tipe data di PHP.
>
> Berikut operator perbandingan :
>
> <img width="179" alt="Cuplikan layar 2024-03-19 201605" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f9052647-62a7-416f-8b77-6e553017c7f4">
>
> #### OPERATOR LOGIKA
> - Operator logika di PHP digunakan untuk membandingkan dua nilai boolean.
> - Operator ! (not) digunakan untuk membalikkan nilai boolean.
> - Operator xor digunakan untuk memeriksa apakah salah satu dari dua kondisi benar, tetapi tidak keduanya.
>
> Berikut kode operator logika :
>
> <img width="187" alt="Cuplikan layar 2024-03-19 201623" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fe6e45f8-691b-495f-8e32-be66a41f453a">
>
> #### INCREMENT DAN DECREMENT
> - PHP mendukung operator increment dan decrement seperti dalam bahasa pemrograman C untuk menaikkan atau menurunkan nilai angka.
>
> Berikut kode increment dan decrement :
> 
> <img width="118" alt="Cuplikan layar 2024-03-19 201643" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c7b8fcdf-a272-4866-96b5-acb4ae34b4db">
>
> #### OPERATOR ARRAY
> - PHP memiliki operator khusus untuk array, seperti operator ```+``` untuk menggabungkan dua array.
> - Operator equality (```==```) memeriksa apakah nilai dan posisi elemen dalam dua array sama.
> - Operator inequality (```!=```) memeriksa apakah dua array tidak sama.
>
> Berikut kode operator array (1) :
>
> <img width="212" alt="Cuplikan layar 2024-03-19 201704" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f47fd424-ebd6-46a7-bd65-55bb972d75c2">
>
> Berikut kode operator array (2) :
> 
> <img width="215" alt="Cuplikan layar 2024-03-19 201718" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/e339dbb2-37a3-4663-b325-3dd79fc6b1e9">
---
> #### EXPRESSION
> - Expression statement adalah bagian penting dalam PHP, di mana hampir semua kode yang ditulis adalah sebuah expression.
>
> Berikut kode expression complex :
>
> <img width="154" alt="Cuplikan layar 2024-03-19 201820" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ee9317dc-794a-4b8b-a4e8-9fe9edcc2d85">
>
> #### STATEMENT
> - Statement adalah kalimat lengkap dalam bahasa pemrograman, diakhiri dengan titik koma, seringkali terdiri dari satu atau lebih expression.
>
> Berikut kode statement :
>
> <img width="243" alt="Cuplikan layar 2024-03-19 201945" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/3f0eb3ee-6d70-4f3d-9c37-a39352a7834b">
>
> #### BLOCK
> -  Block adalah kumpulan statement yang diawali dan diakhiri dengan kurung kurawal, bisa berisi nol atau lebih statement.
>
> Berikut kode block :
> 
> <img width="251" alt="Cuplikan layar 2024-03-19 202137" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/6b67faab-ea2c-4d73-b1d7-0bfde5982aba">
---
> ### MANIPULASI STRING
>
> #### Dot Operator
> - Dot operator (titik) digunakan untuk menggabungkan string dengan data lain, lebih disarankan daripada menggunakan operator + untuk menghindari masalah konversi tipe data.
>
> Berikut kode dot operator :
> 
> <img width="248" alt="Cuplikan layar 2024-03-19 202206" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c20ee9cb-1e4a-4d5b-a4bd-dcca898ce292">
>
> #### KONVERSI KE NUMBER DAN SEBALIKNYA
> - Konversi antara tipe data string dan number cukup mudah dalam PHP dengan menggunakan tanda kurung dan tipe data yang diinginkan.
>
> Berikut kode konversi ke number :
>
> <img width="216" alt="Cuplikan layar 2024-03-19 202222" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/d300fc63-b986-428b-8f2c-9abbf9dcf26d">
>
> #### MENGAKSES KARAKTER
> -  Karakter dalam string bisa diakses menggunakan indeks, dimulai dari 0, mirip dengan array.
>
> Berikut kode mengakses karakter :
>
> <img width="193" alt="Cuplikan layar 2024-03-19 202236" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/96b7a85d-a100-4ffb-aa26-e2caa34066f5">
>
> #### VARIABLE PARSING
> - Variabel parsing memungkinkan penggunaan variabel dalam string dengan menggunakan tanda dollar ($) diikuti oleh nama variabelnya, khusus dalam double quotes atau heredoc.
>
> Berikut kode variable parsing :
>
> <img width="413" alt="Cuplikan layar 2024-03-19 202318" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2548208e-d0ac-4299-bd25-e4c59af55b2b">
>
> #### CURLY BRACE
> -  Untuk menggabungkan variabel dengan string tanpa spasi, kurung kurawal bisa digunakan sebelum variabel parsing, diikuti oleh variabel tersebut.
>
> Berikut kode curly brace :
>
> <img width="249" alt="Cuplikan layar 2024-03-19 202331" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/467cd525-3002-411b-aa33-76974c97079c">
---
> #### IF STATEMENT
> - Pada percabangan, kita dapat mengeksekusi kode program berdasarkan kondisi yang terpenuhi menggunakan if statement.
> - Di PHP, if statement dapat memiliki blok kode dengan atau tanpa kurung kurawal, tergantung pada kebutuhan.
>
> Berikut kode if statement :
>
> <img width="292" alt="Cuplikan layar 2024-03-19 202458" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/9854f303-edc0-4f3f-9820-26b78bd060a3">
>
> #### ELSE STATEMENT
> - Blok if akan dieksekusi ketika kondisi if bernilai true
> - kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
> - hal ini bisa dilakukan menggunakan else statement
>
> Berikut kode elses statement :
>
> <img width="325" alt="Cuplikan layar 2024-03-19 202603" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c3e767a8-3769-483d-9bd7-c33daa24a6a8">
>
> #### ELSE IF STATEMENT
> - penggunaan if statement untuk mengecek multiple kondisi dengan menggunakan else if (elseif) statement.
> - Kasus seperti ini, di PHP kita bisa menggunakan Else if statement
> - Else if di PHP bisa lebih dari satu
> - Kode Else if di php bisa menggunakan "else if" atau elseif (digabung)
>
> Berikut kode else if statement :
>
> <img width="305" alt="Cuplikan layar 2024-03-19 202636" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/013ca756-51c3-402c-878a-ccebe9d11c6a">
>
> Berikut kode else if statement dengan colon :
>
> <img width="279" alt="Cuplikan layar 2024-03-19 202651" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/0ed47bd2-768a-4551-b39c-7a2aab896f42">
>
> #### SWITCH STATEMENT
> - Switch statement digunakan untuk percabangan sederhana yang hanya membandingkan nilai variabel dengan nilai-nilai tertentu.
> - Switch statement lebih disarankan jika hanya menggunakan perbandingan sama dengan (==) karena lebih sederhana dan mudah dipahami.
>
> Berikut kode switch statement :
>
> <img width="277" alt="Cuplikan layar 2024-03-19 202735" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/150883e8-69c1-4949-9170-311c19681012">
>
> Berikut kode syntax alternative :
>
> <img width="392" alt="Cuplikan layar 2024-03-19 202812" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/e78c3a62-63f8-4a0e-a81c-4ffa6f0af0f9">
---
> #### TERNARY OPERATOR
> - Penggunaan ternary operator (?) untuk menyederhanakan pengecekan kondisi dan pengisian nilai variabel.
>
> Berikut kode bukan ternary operator :
>
> <img width="184" alt="Cuplikan layar 2024-03-20 072128" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/54e5b632-fe40-4f89-8a63-aa7d6d8d442f">
>
> Berikut kode ternary operator :
>
> <img width="350" alt="Cuplikan layar 2024-03-19 203048" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/cf655065-3e7c-4245-b75d-32d12c28d06d">
---
> #### NULL COALESCING OPERATOR
> - Penggunaan null coalescing operator (```??```) untuk mengecek dan mengisi nilai default jika data kosong.
>
> Berikut kode tanpa null coalescing operator :
>
> <img width="283" alt="Cuplikan layar 2024-03-19 203116" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/234660d8-7f1c-4b01-91dc-2bfc6a0fe4dd">
---
> #### FOR LOOP
> - Syntax dan penjelasan tentang for loop untuk mengeksekusi blok kode berulang kali berdasarkan kondisi.
>
> Berikut kode for loop :
>
> <img width="294" alt="Cuplikan layar 2024-03-19 203608" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/95a330d3-b711-4fe7-a0d0-a00faf93ba65">
>
> Berikut kode for loop dengan kondisi :
>
> <img width="372" alt="Cuplikan layar 2024-03-19 203622" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2aa6733f-8241-472f-bce8-adfe826d2539">
>
> Berikut kode for loop dengan init statement :
>
> <img width="378" alt="Cuplikan layar 2024-03-19 203642" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/0b57843a-0434-4f5c-b074-3977890ac489">
>
> Berikut kode for loop dengan post statement :
>
> <img width="378" alt="Cuplikan layar 2024-03-19 203653" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/00de98b1-a552-48b2-9813-86a08d054405">
>
> Berikut kode for loop dengan syntax berbeda :
>
> <img width="387" alt="Cuplikan layar 2024-03-19 203715" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/984f5275-4a9a-4255-8e84-407a71ebd49c">
---
> #### WHILE LOOP
> - Perkenalan tentang while loop yang lebih sederhana dengan hanya menggunakan kondisi untuk pengulangan.
>
> Berikut kode while loop :
>
> <img width="387" alt="Cuplikan layar 2024-03-19 203816" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/51e58452-8ad4-4fa4-8c91-aac7d7e640e8">
>
> Berikut kode while loop dengan syntax berbeda :
>
> <img width="383" alt="Cuplikan layar 2024-03-19 203827" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1fd2391f-1091-4c07-9fe9-d370f859218c">
---
> #### DO WHILE LOOP
> - do while loop adalah perulangan yang mirip dengan while
> - perbedaan hanya pada pengecekan kondisi
> - pengecekan kondisi di whilel loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
> - Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai
>
> Berikut kode do while loop :
>
> <img width="378" alt="Cuplikan layar 2024-03-19 203849" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/0601be94-9b1b-45f2-a6b6-a86b939152e0">
---
> #### BREAK & CONTINUE
> - Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
> - Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
> - Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
>
> Berikut kode break :
> 
> <img width="393" alt="Cuplikan layar 2024-03-19 203926" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/8e257515-cf91-4593-aaf1-69ddb2a72031">
>
> Berikut kode continue :
>
> <img width="351" alt="Cuplikan layar 2024-03-19 203941" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b05cf339-5fff-4440-8e69-64e57335353d">
---
> #### FOR EACH
> - kadang kita biasa mengakses data array menggunakan perulangan
> - mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
> - Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di array secara otomatis
>
> Berikut kode tanpa for each :
>
> <img width="322" alt="Cuplikan layar 2024-03-19 204004" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/89f1f8cd-1575-4471-ba5e-e98af93b564e">
>
> Berikut kode for each :
>
> <img width="318" alt="Cuplikan layar 2024-03-19 204020" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f13889ec-4898-4741-bd8c-8461aae3fe2f">
>
> Berikut kode for each dengan key :
>
> <img width="286" alt="Cuplikan layar 2024-03-19 204035" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/122c9103-ef1c-4da2-98ba-c99db90b4b96">
---
> #### GOTO OPERATOR
> -  Penggunaan goto operator jarang disarankan karena bisa membingungkan alur program, sebaiknya dihindari kecuali dalam kasus tertentu yang sangat spesifik.
> -  Hati-hati saat menggunakan goto, karena penggunaan yang berlebihan dapat membuat kode sulit dipahami.
>
> berikut kode goto operator :
>
> <img width="207" alt="Cuplikan layar 2024-03-19 204101" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/63abdbeb-e926-4226-837f-1c173bbb6aaa">
>
> berikut kode goto operator di loop :
>
> <img width="383" alt="Cuplikan layar 2024-03-19 204157" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/4c3ac804-c48a-4eb7-b6dd-d3587f26b148">
---
> #### FUNCTION
> - Function adalah blok kode yang dapat dijalankan saat dipanggil dengan menggunakan nama dan argumen tertentu.
>
> Berikut kode function :
>
> <img width="255" alt="Cuplikan layar 2024-03-19 204305" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1e6f1d11-b6f2-4851-ab4d-bc435a7d5b58">
>
> #### LOKASI FUNCTION
> - Function dalam PHP sangat fleksibel, dapat diletakkan di mana saja dalam kode, namun harus dipanggil sebelum digunakan.
>
> Berikut kode lokasi function :
>
> <img width="290" alt="Cuplikan layar 2024-03-19 204336" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ea80ab4b-5104-4115-b0a1-b43bec681cdf">
>
> #### FUNCTION ARGUMENT
> - Argumen atau parameter dapat ditambahkan ke dalam function untuk mengirim informasi ke dalamnya, bisa lebih dari satu dan dipisahkan dengan koma.
>
> Berikut kode function argument :
>
> <img width="342" alt="Cuplikan layar 2024-03-19 204359" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/57db742f-bc0c-4b20-9ff9-efd38317e865">
>
> #### DEFAULT ARGUMENT VALUE
> - PHP mendukung default argument value, yang memungkinkan untuk menentukan nilai default jika argumen tidak diberikan saat pemanggilan function.
>
> Berikut kode default argument value :
>
> <img width="271" alt="Cuplikan layar 2024-03-19 204626" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fbdc4e31-d092-4ffa-8c81-0ad58c45ff32">
>
> #### KESALAHAN DEFAULT ARGUMENT VALUE
> - Default argumen value disarankan ditempatkan di parameter yang belakang, bukan di depan.
>
> Berikut kode kesalahan default argument value :
>
> <img width="338" alt="Cuplikan layar 2024-03-19 204646" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a4da5ae5-4951-4051-9deb-cc635551a521">
>
> #### TYPE DECLARATION
> - Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
> - Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
>
> Berikut kode type declaration :
>
> <img width="357" alt="Cuplikan layar 2024-03-19 204702" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/88a98534-f854-4877-a27f-1d4af6fc1677">
>
> #### VARIABLE-LENGTH ARGUMENT LIST
> - Variable-length arguments memungkinkan penggunaan parameter yang menerima banyak nilai, dengan tanda titik-titik sebelum nama argumen.
>
> Berikut kode variable lenght argument list :
>
> <img width="470" alt="Cuplikan layar 2024-03-19 204717" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/e6bdfa3c-cce3-4280-9ab0-388a64fbd3f0">
>
> #### FUNCTION RETURN VALUE
> - Fungsi dalam PHP dapat mengembalikan nilai dengan menggunakan kata kunci "return", namun hanya dapat mengembalikan satu jenis data.
> - Menggunakan kata kunci return untuk mengembalikan nilai dari sebuah fungsi.
> - Kode di bawah pernyataan return tidak akan dieksekusi, karena eksekusi langsung balik ke atas setelah menemui return.
>
> Berikut kode function return value :
>
> <img width="304" alt="Cuplikan layar 2024-03-19 204804" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ab07d117-cee6-4125-a04c-e817a8a45f7f">
>
> Berikut kode function return value (2) :
>
> <img width="305" alt="Cuplikan layar 2024-03-19 204832" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/73658173-6d76-45a3-bcf2-2f3fc5d1b6f4">
>
> #### RETURN TYPE DECLARATIONS
> - Penggunaan deklarasi tipe data kembali (return type declaration) membantu dalam dokumentasi dan pencegahan kesalahan.
> - Menggunakan deklarasi tipe data kembali membantu dalam menjaga keakuratan tipe data yang dikembalikan oleh sebuah fungsi.
>
> Berikut kode return type declarations :
>
> <img width="302" alt="Cuplikan layar 2024-03-19 205002" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/8797d627-0e37-4aee-abd3-41003fc013cd">
---
> #### VARIABLE FUNCTION
> - Variabel function memungkinkan pemanggilan fungsi menggunakan nilai dari variabel.
> - Variabel function memungkinkan kita untuk menyimpan function dalam sebuah variabel dan memanggilnya dengan variabel tersebut.
>
> Berikut kode variable function :
>
> <img width="260" alt="Cuplikan layar 2024-03-19 205040" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/8cdb1df6-bffd-4f60-9bb3-dee8d37b9ce9">
>
> Berikut kode penggunaan variable function :
>
> <img width="345" alt="Cuplikan layar 2024-03-19 205059" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/e153db04-66c2-4c6c-8124-dcb2123f32d7">
>
> #### ANONYMOUS FUNCTION
> -  Anonymous function (fungsi tanpa nama) atau juga dikenal sebagai closure, memungkinkan kita untuk membuat fungsi tanpa harus memberikannya nama.
>
> Berikut kode annonymous function :
>
> <img width="262" alt="Cuplikan layar 2024-03-19 205127" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/77874d0a-81a7-434e-8aa3-03196451bf74">
>
> Berikut kode anonymous function sebagai argument :
>
> <img width="382" alt="Cuplikan layar 2024-03-19 205234" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/43ba582d-74cc-428f-b6d0-ddfe18f20818">
>
> #### MENGAKSES VARIABLE DILUAR CLOSURE
> - Penjelasan tentang penggunaan use untuk mengakses variabel di luar closure atau Anonymous function.
>
> Berikut kode mengakses variable diluar :
>
> <img width="416" alt="Cuplikan layar 2024-03-19 205302" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c2defc83-9f89-4ca9-a693-29ac3ab052da">
>
> #### ARROW FUNCTION
> - Pengenalan tentang Arrow Function (Eropa Function) di PHP 7.4.
> - Perbandingan antara Anonymous Function dan Arrow Function dalam penggunaan sederhana.
>
> Berikut kode arrow function :
>
> <img width="505" alt="Cuplikan layar 2024-03-19 205322" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/6d05a642-77ac-469c-aa70-352363c32899">
>
> #### CALLBACK FUNCTION
> -  Callback adalah sebuah mekanisme function memanggil function lainnya sesuai dengan yang diberikan di argument
>
> Berikut kode callback function :
>
> <img width="374" alt="Cuplikan layar 2024-03-19 205342" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/118f9ca6-18f5-4311-bcdf-575491c4328c">
>
> #### RECURSIVE FUNCTION
> - Recursive adalah teknik di mana sebuah fungsi memanggil dirinya sendiri.
> - Dalam recursive, perhatikan kasus dasar yang akan mengakhiri pemanggilan recursive.
>
> Berikut kode factorial loop :
>
> <img width="296" alt="Cuplikan layar 2024-03-19 205522" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/3a97aaa0-7fee-482d-ab88-3d3e405792c5">
>
> Berikut kode factorial recursive :
>
> <img width="257" alt="Cuplikan layar 2024-03-19 205906" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/94b378e0-fc12-474a-bc94-a077e4897e3b">
>
> #### PROBLEM DENGAN RECURSIVE
> Gunakan recursive dengan hati-hati karena dapat menyebabkan masalah overflows dan konsumsi memori yang besar.
>
> Berikut kode stackOverflow :
>
> <img width="270" alt="Cuplikan layar 2024-03-19 205552" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/5c1fbc34-4b91-490f-814d-c82d26cc84c9">
---
> #### KOMENTAR
> - Komentar dalam kode program PHP penting untuk dokumentasi dan pemahaman logika.
> - Ada dua cara untuk menambahkan komentar: lebih dari satu baris menggunakan /* */, dan satu baris menggunakan //.
>
> Berikut kode komentar :
>
> <img width="268" alt="Cuplikan layar 2024-03-19 205613" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c091e402-c4b7-4a4e-96ba-60ce3df56f3c">
---
> #### STRING FUNCTION
> - Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string.
>
> Berikut kode string function :
>
> <img width="355" alt="Cuplikan layar 2024-03-19 205631" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b43182e9-d57e-4ce1-8915-5d4b6ff9c641">
>
> #### ARRAY FUNCTION
> - Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data array
>
> berikut kode array function :
>
> <img width="436" alt="Cuplikan layar 2024-03-19 205656" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/06724533-92a6-4771-ad90-091c5b1f0650">
>
> #### IS FUNCTION
> - Function is_ pada PHP digunakan untuk mengecek tipe data variabel.
>
> Berikut kode is function :
>
> <img width="207" alt="Cuplikan layar 2024-03-19 205721" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/3ae64608-a397-498e-9ce6-33e7ed7b6e49">
---
> #### REQUIRE DAN INCLUDE
> - require dan include digunakan untuk mengambil file PHP lain dalam aplikasi, dengan perbedaan bahwa require akan menyebabkan error dan menghentikan program jika file tidak ditemukan, sedangkan include hanya memberikan peringatan tetapi program tetap berlanjut.
> - Menggunakan include_once atau require_once memastikan bahwa file yang sama hanya diambil sekali untuk menghindari redeclare function error.
>
> Berikut kode include :
>
> <img width="239" alt="Cuplikan layar 2024-03-19 205740" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/960b03d4-0eef-4d53-9303-f3b9d5ad7a71">
---
> #### VARIABLE SCOPE
> - Variabel di PHP memiliki tiga jenis scope: Global, Lokal, dan Static.
>
> Berikut kode variable global :
>
> <img width="268" alt="Cuplikan layar 2024-03-19 205758" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f3b97bac-204a-4fa2-843d-8fe3af88ad5f">
>
> #### LOCAL SCOPE
> - Variabel Lokal dideklarasikan di dalam fungsi dan hanya dapat diakses dari dalam fungsi tersebut.
>
> Berikut kode local scope :
>
> <img width="257" alt="Cuplikan layar 2024-03-19 205906" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/dce5c229-5edc-43da-8c47-26fc81ac54a8">
>
> #### STATIC SCOPE
> - Variabel Static memiliki siklus hidup yang berlanjut di antara panggilan fungsi.
>
> Berikut kode static scope :
>
> <img width="302" alt="Cuplikan layar 2024-03-19 205926" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c2d4b760-01b4-40f8-9d10-02ab851de7dd">
---
> #### REFERENCE
> - Reference dalam PHP memungkinkan akses ke variabel yang sama dengan nama yang berbeda.
Referensi dibuat dengan menggunakan karakter &.
>
> Berikut kode assign by refrence :
>
> <img width="166" alt="Cuplikan layar 2024-03-19 205946" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/da69fe89-5b80-4cd7-bc2f-29771feda67d">
>
> Berikut kode pass by refrence :
>
> <img width="226" alt="Cuplikan layar 2024-03-19 210005" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ae68fe79-b82a-4b05-9428-96b4cef39f79">
>
> #### RETURNING REFRENCES
> - PHP mendukung returning reference, yang memungkinkan fungsi mengembalikan nilai sebagai reference.
>
> Berikut kode returning refrences :
>
> <img width="182" alt="Cuplikan layar 2024-03-19 210018" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/323727c5-4e62-4ab0-8ef2-da6ba6dacdbf">
---
<p align="center" >
  <b>CATATAN TAMBAHAN</b>
</p>

---

> - Mudah Dipelajari: PHP itu seperti bahasa Inggris sederhana untuk pembangunan web. Sintaksnya tidak terlalu rumit, jadi pemula bisa cepat belajar dan mulai membuat situs web.
> - Gratis dan Banyak Digunakan: PHP gratis digunakan dan banyak digunakan di seluruh dunia. Ini berarti Anda dapat mulai membuat situs web tanpa biaya besar.

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

---

> - Variabel dalam PHP adalah seperti kotak penyimpanan yang memungkinkan Anda menyimpan informasi yang diperlukan, seperti nama "John". Anda hanya perlu menyebutkan nama variabel yang telah Anda buat, seperti "nama", untuk mengaksesnya kembali. Dengan demikian, variabel membuat penyimpanan dan pengambilan informasi menjadi lebih praktis dan mudah dipahami dalam program PHP Anda.
> - PHP adalah bahasa pemrograman yang kuat untuk pengembangan web. Gratis, mudah dipelajari, dan mendukung berbagai database. Fleksibel dan didukung oleh komunitas besar, PHP memungkinkan pembuatan situs web yang dinamis dan interaktif dengan kinerja tinggi.
> - Tipe data dalam PHP adalah jenis nilai yang bisa disimpan dalam variabel. Ini mencakup integer, float, string, boolean, array, objek, dan null. Pemahaman tentang tipe data penting untuk mengelola informasi dengan efisien dalam pengembangan aplikasi web.


































































































