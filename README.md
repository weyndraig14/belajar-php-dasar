<img width="260" alt="Cuplikan layar 2024-03-19 205040" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b95da718-f71e-4356-910c-4780404393a6">
<p align="center" >
  <b>POINT UTAMA</b>
</p>

---
> #### PHP DASAR
> - PHP adalah singkatan dari PHP Hypertext Preprocessor, diciptakan pertama kali oleh Rasmus Lerdorf pada tahun 1995.
> - PHP file kode program selalu diakhiri dengan extension .php
> - Kode program PHP harus dimulai dengan tag pembuka yaitu seperti :
>
>    <img width="170" alt="Cuplikan layar 2024-03-19 194732" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c5ef07ea-2385-406d-88a5-f13ab652238f">

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
> <img width="229" alt="Cuplikan layar 2024-03-19 195011" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/847338f2-c082-4d75-b1b1-47af8c695a95">

---
> Berikut kode Tipe Data Floating Point :
> - Floating-point dalam PHP menggunakan titik (.) untuk menambahkan koma, dan dapat menggunakan notasi ilmiah (contoh: E3) untuk angka besar atau kecil.
> 
> <img width="463" alt="Cuplikan layar 2024-03-19 195123" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a0550691-95fc-418b-a237-b104f25e499e">

---
> #### INTEGER OVERFLOW
> - Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
> - Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point.
> Berikut kode Interget Overflow :
>
> <img width="246" alt="Cuplikan layar 2024-03-19 195419" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/30e54885-398b-47bc-ac96-619c69778945">

---
> #### TIPE DATA BOOLEAN
> - Tipe data boolean adalah tipe data paling sederhana di PHP
> - Tipe data boolean dalam PHP hanya memiliki dua nilai, yaitu true atau false, dan bersifat case-insensitive.
>
> Berikut kode Tipe Data Boolean :
>
> <img width="156" alt="Cuplikan layar 2024-03-19 195605" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/9467f6a5-ace8-4eb7-a01e-5e6ba407fbd3">

---
> #### TIPE DATA STRING
> - Tipe data string adalah representasi dari teks atau tulisan dalam PHP dan dapat mengandung kosong atau banyak karakter.
>   
> Berikut kode tipe data string single quote :
>
> <img width="226" alt="Cuplikan layar 2024-03-19 195837" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a877331f-2357-4c90-abc0-d7fa310cfea8">

>
> - Selain single quote, kita juga bisa menggunakan double quote. Salah satu kelebihan menggunakan double quote adalah kita menggunakan escape sequence untuk beberapa hal, seperti \n untuk ENTER, \t untuk TAB, " untuk double quote, dan lain-lain
>
> Berikut kode tipe data string double quote :
>
> <img width="257" alt="Cuplikan layar 2024-03-19 195934" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/6b4bc5cd-2437-4b36-983b-3f3527e47442">

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
> <img width="286" alt="Cuplikan layar 2024-03-19 200037" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/7651e0b4-452d-447c-9374-d2e541a3fe7e">

>
> #### NOWDOC
> - Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote.
>
> Berikut kode tipe data string Nowdoc :
>
> <img width="286" alt="Cuplikan layar 2024-03-19 200126" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/25b3d8cd-7b08-45be-8d2d-61223f0dfbe9">

---
> #### VARIABLE
> - Variabel di PHP dapat diubah tipe datanya secara dinamis, seperti dari string menjadi integer.
> - Penamaan variable tidak boleh mengandung spasi
>
> Berikut kode variable :
>
> <img width="133" alt="Cuplikan layar 2024-03-19 200302" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/dc0e03b8-cfcc-43e6-b776-575c4c47338a">

>
> #### VARIABLE VARIABLES
> - PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
> - Untuk membuat variable dari value variable kita bisa menggunakan $$ diikuti dengan nama variable nya
>
> Berikut kode variable variables :
>
> <img width="159" alt="Cuplikan layar 2024-03-19 200429" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/79daee25-fe91-4f64-b3d1-3d9b116701bf">

---
> #### CONSTANT
> - Variabel di PHP memiliki sifat mutable, artinya bisa diubah nilainya. Constant, di sisi lain, memiliki sifat immutable, yang artinya nilainya tidak bisa diubah setelah deklarasi.
> - Untuk membuat constant kita bisa menggunakan function define()
> - Best practice pembuatan nama constant adalah menggunakan UPPER_CASE
>
> Berikut kode constant :
> 
> <img width="300" alt="Cuplikan layar 2024-03-19 200615" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/9f958376-2185-4c88-85f1-95318446198e">

---
> #### DATA NULL
> - Null dalam PHP digunakan untuk merepresentasikan sebuah variabel tanpa nilai. Penggunaan is_null() dapat digunakan untuk mengecek apakah sebuah variabel kosong atau null.
> - Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)
>
> Berikut kode null :
>
> <img width="130" alt="Cuplikan layar 2024-03-19 200718" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f3b9bf1c-3b5a-4b94-80d7-0e0ee5851580">

>
> Berikut kode untuk mengecek null :
>
> <img width="185" alt="Cuplikan layar 2024-03-19 200725" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a14e2c06-4bfb-4626-86c6-753ad42598de">

>
> #### MENGHAPUS VARIABLE
> - Function unset() digunakan untuk menghapus variabel dalam PHP. Namun hati-hati, variabel yang dihapus dengan unset() tidak bisa lagi diakses dan bahkan tidak dapat diketahui keberadaannya menggunakan is_null().
> - Penggunaan isset lebih aman daripada is_null untuk memeriksa apakah variabel ada dan nilainya tidak nol.
> 
> Berikut kode untuk menghapus variable dan isset :
>
> <img width="150" alt="Cuplikan layar 2024-03-19 200826" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f0ed21d1-c4a2-4870-8884-1fed1c0a13ee">

---
> #### TIPE DATA ARRAY
> - Tipe data array di PHP memungkinkan untuk menyimpan kumpulan data dengan jenis yang berbeda-beda.
> - Array di PHP memiliki panjang yang dinamis, memungkinkan penambahan data sebanyak-banyaknya tanpa batasan.
> - Array dapat dibuat menggunakan kata kunci array atau kurung kotak, dengan fleksibilitas dalam jenis data yang dimasukkan.
>
> Berikut kode untuk membuat array :
>
> <img width="295" alt="Cuplikan layar 2024-03-19 200933" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/72741809-1c92-4c5e-a6d7-4ea1e5f68edd">

>
> #### OPERASI ARRAY
> - Operasi umum pada array meliputi mengakses, mengubah, menambah, dan menghapus data menggunakan indeks.
>
> Berikut kode operasi array :
>
> <img width="184" alt="Cuplikan layar 2024-03-19 200951" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/0c4562bb-032d-469e-8810-0010fa77d8db">

>
> #### ARRAY SEBAGAI MAP
> - Di banyak bahasa pemrograman, terdapat tipe data bernama Map, yaitu asosiasi antara key dan value.
> - Namun di PHP, Map dapat dibuat menggunakan Array.
> - secara default, Array akan menggunakan indeks (nomor) sebagai key dan value-nya, dan Anda bebas memasukkan data ke dalam Array.
> - Namun Jika Anda ingin, Anda juga dapat mengubah indeks-nya menjadi tipe data lain, seperti string, yang membuat Array di PHP mirip dengan Map di bahasa pemrograman lain.
>
> Berikut kode membuat map :
> 
> <img width="215" alt="Cuplikan layar 2024-03-19 201323" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fad41334-9292-43d1-bc7d-13f2f71e3d65">

>
> #### ARRAY DALAM ARRAY
> - Seperti dijelaskan di awal, Array di PHP bisa berisikan data apapun
> - Sehingga kita juga bisa membuat array di dalam array jika memang dibutuhkan
>
> Berikut kode array di dalam array :
>
> <img width="240" alt="Cuplikan layar 2024-03-19 201430" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1452c1a7-f4c7-46a2-98f3-ef62d0d8694f">

---
> #### OPERATOR ARITMATIKA
> - Operator aritmatika di PHP mendukung operasi matematika dasar seperti penambahan, pengurangan, perkalian, pembagian, sisa bagi, dan perpangkatan.
>
> Berikut kode operator aritmatika :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/884be802-db1c-416c-86d3-cc23134f0daa)<img width="204" alt="Cuplikan layar 2024-03-19 201525" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/463a543e-210c-44ca-be40-2aa0c9d75a8b">

>
> #### OPERATOR PENUGASAN
> - Operator penugasan di PHP, seperti +=, dapat digunakan untuk operasi aritmatika yang singkat dan mempersingkat penulisan kode.
>
> Berikut kode operator penugasan :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/b04a589f-db31-44c3-b027-7d40bdd02bdc)<img width="176" alt="Cuplikan layar 2024-03-19 201551" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/68ea90f7-1fa3-4c57-bf05-48509adba324">

>
> #### OPERATOR PERBANDINGAN
> -  Operator perbandingan di PHP digunakan untuk membandingkan nilai atau tipe data, mengembalikan nilai true jika perbandingannya benar dan false jika salah.
> -  Contoh penggunaan operator perbandingan seperti ```==```, ```===```, ```<```, ```<=```, ```>```, dan ```>=``` untuk membandingkan nilai atau tipe data di PHP.
>
> Berikut operator perbandingan :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/10fbbfdc-d6ae-45bb-9d63-e30245986a21)<img width="179" alt="Cuplikan layar 2024-03-19 201605" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/63f29b5c-802b-4fdc-b800-2742c4cebdc6">

>
> #### OPERATOR LOGIKA
> - Operator logika di PHP digunakan untuk membandingkan dua nilai boolean.
> - Operator ! (not) digunakan untuk membalikkan nilai boolean.
> - Operator xor digunakan untuk memeriksa apakah salah satu dari dua kondisi benar, tetapi tidak keduanya.
>
> Berikut kode operator logika :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/882631f7-d661-4076-9753-75225a70ee4e)<img width="187" alt="Cuplikan layar 2024-03-19 201623" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fcbf039f-e971-4f39-bbbe-2e51c1244a98">

>
> #### INCREMENT DAN DECREMENT
> - PHP mendukung operator increment dan decrement seperti dalam bahasa pemrograman C untuk menaikkan atau menurunkan nilai angka.
>
> Berikut kode increment dan decrement :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7dc601f3-71a5-4a5c-92eb-0161ebd27111)<img width="118" alt="Cuplikan layar 2024-03-19 201643" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/aac93a99-addd-4943-9838-332449471c52">

>
> #### OPERATOR ARRAY
> - PHP memiliki operator khusus untuk array, seperti operator ```+``` untuk menggabungkan dua array.
> - Operator equality (```==```) memeriksa apakah nilai dan posisi elemen dalam dua array sama.
> - Operator inequality (```!=```) memeriksa apakah dua array tidak sama.
>
> Berikut kode operator array (1) :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/dc8178e9-8bdd-4e96-ab81-4ba8ae117dc9)<img width="212" alt="Cuplikan layar 2024-03-19 201704" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/29405326-9120-4787-9627-8c3d2011b971">

>
> Berikut kode operator array (2) :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/25a537e3-ebe4-4ac8-bdaa-fe85049ebf6d)<img width="215" alt="Cuplikan layar 2024-03-19 201718" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/7130c938-c273-47f1-b59b-fed47f53211b">

---
> #### EXPRESSION
> - Expression statement adalah bagian penting dalam PHP, di mana hampir semua kode yang ditulis adalah sebuah expression.
>
> Berikut kode expression complex :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/311a88bc-1b93-4045-9803-26c275764c29)<img width="154" alt="Cuplikan layar 2024-03-19 201820" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/84ebf768-372e-457d-a6e7-4e49127dc16e">

>
> #### STATEMENT
> - Statement adalah kalimat lengkap dalam bahasa pemrograman, diakhiri dengan titik koma, seringkali terdiri dari satu atau lebih expression.
>
> Berikut kode statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/e49b8299-7bf7-4fb4-8af5-28ad6000b2cf)<img width="243" alt="Cuplikan layar 2024-03-19 201945" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/dfd515a2-d14a-498d-bf25-def2a28ec837">

>
> #### BLOCK
> -  Block adalah kumpulan statement yang diawali dan diakhiri dengan kurung kurawal, bisa berisi nol atau lebih statement.
>
> Berikut kode block :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/49479d62-ab67-4adf-a62f-7c19ed90f1c3)<img width="251" alt="Cuplikan layar 2024-03-19 202137" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/03274b8b-c614-4e21-95a5-8fda2ed23eb8">

---
> ### MANIPULASI STRING
>
> #### Dot Operator
> - Dot operator (titik) digunakan untuk menggabungkan string dengan data lain, lebih disarankan daripada menggunakan operator + untuk menghindari masalah konversi tipe data.
>
> Berikut kode dot operator :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1599f1a2-414e-4aa4-b31a-c756d27f748f)<img width="248" alt="Cuplikan layar 2024-03-19 202206" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/5c4ae762-61c5-44ed-80b5-0f14d8ffa03e">

>
> #### KONVERSI KE NUMBER DAN SEBALIKNYA
> - Konversi antara tipe data string dan number cukup mudah dalam PHP dengan menggunakan tanda kurung dan tipe data yang diinginkan.
>
> Berikut kode konversi ke number :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/d7a5c213-e159-4c1e-b02a-7e135f91cc26)<img width="216" alt="Cuplikan layar 2024-03-19 202222" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c145b875-311f-46e9-99bc-56c7bb19bd6a">

>
> #### MENGAKSES KARAKTER
> -  Karakter dalam string bisa diakses menggunakan indeks, dimulai dari 0, mirip dengan array.
>
> Berikut kode mengakses karakter :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/be76eba1-f3a8-4ab3-afe6-b1a424c6a34c)<img width="193" alt="Cuplikan layar 2024-03-19 202236" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/127e01a3-8288-460c-9d87-7955703c6bbf">

>
> #### VARIABLE PARSING
> - Variabel parsing memungkinkan penggunaan variabel dalam string dengan menggunakan tanda dollar ($) diikuti oleh nama variabelnya, khusus dalam double quotes atau heredoc.
>
> Berikut kode variable parsing :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/4789ee61-2bbf-4fed-83af-f982369d91a4)<img width="413" alt="Cuplikan layar 2024-03-19 202318" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1b81118f-3d84-4b27-8e0c-faa56be87ce7">

>
> #### CURLY BRACE
> -  Untuk menggabungkan variabel dengan string tanpa spasi, kurung kurawal bisa digunakan sebelum variabel parsing, diikuti oleh variabel tersebut.
>
> Berikut kode curly brace :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/ded6c823-2991-4334-8998-c82efa2fbece)<img width="249" alt="Cuplikan layar 2024-03-19 202331" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/55cbd6dd-299f-460f-8c88-d68879b48f39">

---
> #### IF STATEMENT
> - Pada percabangan, kita dapat mengeksekusi kode program berdasarkan kondisi yang terpenuhi menggunakan if statement.
> - Di PHP, if statement dapat memiliki blok kode dengan atau tanpa kurung kurawal, tergantung pada kebutuhan.
>
> Berikut kode if statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/6792f71a-aefe-4107-b950-1b97a728272c)<img width="292" alt="Cuplikan layar 2024-03-19 202458" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f7ce65e3-34db-48db-a95d-a4955a9f83a1">

>
> #### ELSE STATEMENT
> - Blok if akan dieksekusi ketika kondisi if bernilai true
> - kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
> - hal ini bisa dilakukan menggunakan else statement
>
> Berikut kode elses statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/bf9ca019-91c2-4e73-976a-17f9d661a45a)<img width="325" alt="Cuplikan layar 2024-03-19 202603" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/7f7840d9-35a9-45de-bd92-17d1acb9ac24">

>
> #### ELSE IF STATEMENT
> - penggunaan if statement untuk mengecek multiple kondisi dengan menggunakan else if (elseif) statement.
> - Kasus seperti ini, di PHP kita bisa menggunakan Else if statement
> - Else if di PHP bisa lebih dari satu
> - Kode Else if di php bisa menggunakan "else if" atau elseif (digabung)
>
> Berikut kode else if statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/38e0d1c2-d624-488e-b029-433bed432449)<img width="305" alt="Cuplikan layar 2024-03-19 202636" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/836aeaeb-21bb-41ab-a402-a1bbc6e6795b">

>
> Berikut kode else if statement dengan colon :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1e1f276f-6822-4c4b-8017-4b74b5caa9e7)<img width="279" alt="Cuplikan layar 2024-03-19 202651" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/86c2deb8-a8ec-4dcd-96a5-b99fb56eafee">

>
> #### SWITCH STATEMENT
> - Switch statement digunakan untuk percabangan sederhana yang hanya membandingkan nilai variabel dengan nilai-nilai tertentu.
> - Switch statement lebih disarankan jika hanya menggunakan perbandingan sama dengan (==) karena lebih sederhana dan mudah dipahami.
>
> Berikut kode switch statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/17e65d0c-725b-4121-8561-2991a7a501fd)<img width="277" alt="Cuplikan layar 2024-03-19 202735" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/bc97f805-aa4a-4fe6-88b4-7ce68537b30e">

>
> Berikut kode syntax alternative :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/0506bd39-d1b4-44be-8b5b-474c3fad25e9)<img width="392" alt="Cuplikan layar 2024-03-19 202812" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ff47c7df-e912-4f8a-b8b5-3d360a691813">

---
> #### TERNARY OPERATOR
> - Penggunaan ternary operator (?) untuk menyederhanakan pengecekan kondisi dan pengisian nilai variabel.
>
> Berikut kode bukan ternary operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/3838bc7e-2677-4a0b-8a41-ff42ecd464e3)<img width="350" alt="Cuplikan layar 2024-03-19 203048" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2f35f031-d445-48ec-b801-ba208a9073e2">

>
> Berikut kode ternary operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8dee2f61-b296-40b9-a12f-32f53d2a8e42)<img width="283" alt="Cuplikan layar 2024-03-19 203116" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b409e755-ddde-4277-b753-b25d0bdd57da">

---
> #### NULL COALESCING OPERATOR
> - Penggunaan null coalescing operator (```??```) untuk mengecek dan mengisi nilai default jika data kosong.
>
> Berikut kode tanpa null coalescing operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/47cfc3e7-67b6-49c2-af27-4c4d4d260ee2)<img width="294" alt="Cuplikan layar 2024-03-19 203608" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fda664fb-535d-41da-a9ad-4fb61e8c57bf">

---
> #### FOR LOOP
> - Syntax dan penjelasan tentang for loop untuk mengeksekusi blok kode berulang kali berdasarkan kondisi.
>
> Berikut kode for loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/ec87ac68-23d6-4214-8179-4aa7a75eea95)<img width="372" alt="Cuplikan layar 2024-03-19 203622" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2474b622-3b24-4d70-9308-8cb432b72c48">

>
> Berikut kode for loop dengan kondisi :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/7e53d886-4910-46b7-a3b8-e6c94c9a31b1)<img width="378" alt="Cuplikan layar 2024-03-19 203642" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fe5a05b0-f240-4565-9dd5-c2dd106edbaa">

>
> Berikut kode for loop dengan init statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/23375b19-939a-4fbf-962f-e14aaec0a21a)<img width="378" alt="Cuplikan layar 2024-03-19 203653" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/14e7fa39-6ea8-42da-9d7a-95faf1663e07">

>
> Berikut kode for loop dengan post statement :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/8a8ab8f7-c446-43f4-9d0f-48fde5853043)<img width="387" alt="Cuplikan layar 2024-03-19 203715" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/87bd0f62-cfcf-4820-b52b-181f0e427646">

>
> Berikut kode for loop dengan syntax berbeda :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/6dde8744-24a8-438b-8d28-5aa66e0cf902)<img width="387" alt="Cuplikan layar 2024-03-19 203816" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f30b4edb-be97-4fa5-b104-f74c562c8535">

---
> #### WHILE LOOP
> - Perkenalan tentang while loop yang lebih sederhana dengan hanya menggunakan kondisi untuk pengulangan.
>
> Berikut kode while loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/04146435-7803-4503-9d75-8b05ccda1f7f)<img width="383" alt="Cuplikan layar 2024-03-19 203827" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/43d8e0a5-a8dc-409d-a1bf-792f17e6a0e5">

>
> Berikut kode while loop dengan syntax berbeda :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/85f6b741-b820-43f3-a8a5-81806386f116)<img width="378" alt="Cuplikan layar 2024-03-19 203849" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/fa220110-e397-4299-be31-b8309afe9ecd">

---
> #### DO WHILE LOOP
> - do while loop adalah perulangan yang mirip dengan while
> - perbedaan hanya pada pengecekan kondisi
> - pengecekan kondisi di whilel loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
> - Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai
>
> Berikut kode do while loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/f53545f4-1b20-433f-bb83-0bb8cfdf7be3)<img width="393" alt="Cuplikan layar 2024-03-19 203926" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/4635f3b4-7f35-4968-a8a2-9010fc5f387c">

---
> #### BREAK & CONTINUE
> - Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
> - Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
> - Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
>
> Berikut kode break :
> 
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/0ff4d913-a573-4bd1-a231-0eff533c3533)<img width="351" alt="Cuplikan layar 2024-03-19 203941" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b7f21b74-cc77-470f-8a06-af6377ca5ee3">

>
> Berikut kode continue :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/9532dfa1-faa8-4c98-ac49-80a317adb24b)<img width="322" alt="Cuplikan layar 2024-03-19 204004" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/0738b760-2118-41ac-8363-252ff41e8588">

---
> #### FOR EACH
> - kadang kita biasa mengakses data array menggunakan perulangan
> - mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
> - Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di array secara otomatis
>
> Berikut kode tanpa for each :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/0e184652-3493-42a1-a460-f827bfbf9729)<img width="318" alt="Cuplikan layar 2024-03-19 204020" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/bcb14b59-9ae6-454d-8d47-970ae6450d1b">

>
> Berikut kode for each :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/873b7306-9a59-4fcd-a037-0cf8eb946292)<img width="286" alt="Cuplikan layar 2024-03-19 204035" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1319187a-46a7-4681-ab55-d106d5566730">

>
> Berikut kode for each dengan key :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/2c2c756d-7104-4431-b68b-f3a2fd5eb5e6)<img width="207" alt="Cuplikan layar 2024-03-19 204101" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/a6e85023-d790-4eb5-b534-2cdf0b79b675">

---
> #### GOTO OPERATOR
> -  Penggunaan goto operator jarang disarankan karena bisa membingungkan alur program, sebaiknya dihindari kecuali dalam kasus tertentu yang sangat spesifik.
> -  Hati-hati saat menggunakan goto, karena penggunaan yang berlebihan dapat membuat kode sulit dipahami.
>
> berikut kode goto operator :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/1ec197c5-0227-4e68-954c-25762959e222)<img width="383" alt="Cuplikan layar 2024-03-19 204157" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/421a8dcc-7ce5-426e-b40c-0d9e1b9be00e">

>
> berikut kode goto operator di loop :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/195fdacd-a295-48b0-a9fb-9810fccd91c2)<img width="255" alt="Cuplikan layar 2024-03-19 204305" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/41de88cb-cee4-4246-b135-075043192331">

---
> #### FUNCTION
> - Function adalah blok kode yang dapat dijalankan saat dipanggil dengan menggunakan nama dan argumen tertentu.
>
> Berikut kode function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/a5523f90-886b-48b1-90d6-7968db2f6bb2)<img width="290" alt="Cuplikan layar 2024-03-19 204336" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1ce534fc-d149-4b2b-ac97-f5a4fb5b7757">

>
> #### LOKASI FUNCTION
> - Function dalam PHP sangat fleksibel, dapat diletakkan di mana saja dalam kode, namun harus dipanggil sebelum digunakan.
>
> Berikut kode lokasi function :
>
> ![image](https://github.com/mTakku/php-dasar/assets/145539342/a2815ec9-d7ab-4c94-9a1e-68d703ad5a0a)<img width="342" alt="Cuplikan layar 2024-03-19 204359" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/944f1c8b-102c-49ec-95cb-761a8db147aa">

>
> #### FUNCTION ARGUMENT
> - Argumen atau parameter dapat ditambahkan ke dalam function untuk mengirim informasi ke dalamnya, bisa lebih dari satu dan dipisahkan dengan koma.
>
> Berikut kode function argument :
>
> 

>
> #### DEFAULT ARGUMENT VALUE
> - PHP mendukung default argument value, yang memungkinkan untuk menentukan nilai default jika argumen tidak diberikan saat pemanggilan function.
>
> Berikut kode default argument value :
>
> 

>
> #### KESALAHAN DEFAULT ARGUMENT VALUE
> - Default argumen value disarankan ditempatkan di parameter yang belakang, bukan di depan.
>
> Berikut kode kesalahan default argument value :
>
> 

>
> #### TYPE DECLARATION
> - Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
> - Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
>
> Berikut kode type declaration :
>
> 

>
> #### VARIABLE-LENGTH ARGUMENT LIST
> - Variable-length arguments memungkinkan penggunaan parameter yang menerima banyak nilai, dengan tanda titik-titik sebelum nama argumen.
>
> Berikut kode variable lenght argument list :
>
> <img width="470" alt="Cuplikan layar 2024-03-19 204717" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/746c132d-a2e0-43b7-8f3c-042d331bf952">

>
> #### FUNCTION RETURN VALUE
> - Fungsi dalam PHP dapat mengembalikan nilai dengan menggunakan kata kunci "return", namun hanya dapat mengembalikan satu jenis data.
> - Menggunakan kata kunci return untuk mengembalikan nilai dari sebuah fungsi.
> - Kode di bawah pernyataan return tidak akan dieksekusi, karena eksekusi langsung balik ke atas setelah menemui return.
>
> Berikut kode function return value :
>
> <img width="304" alt="Cuplikan layar 2024-03-19 204804" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/430f2d6a-8e66-4584-a97e-c11281ac7777">

>
> Berikut kode function return value (2) :
>
> <img width="305" alt="Cuplikan layar 2024-03-19 204832" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2b70186c-986f-4fae-988b-a095b8313f22">

>
> #### RETURN TYPE DECLARATIONS
> - Penggunaan deklarasi tipe data kembali (return type declaration) membantu dalam dokumentasi dan pencegahan kesalahan.
> - Menggunakan deklarasi tipe data kembali membantu dalam menjaga keakuratan tipe data yang dikembalikan oleh sebuah fungsi.
>
> Berikut kode return type declarations :
>
> <img width="302" alt="Cuplikan layar 2024-03-19 205002" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/f5ecb831-08f4-4570-aae5-f5e30742ed04">

---
> #### VARIABLE FUNCTION
> - Variabel function memungkinkan pemanggilan fungsi menggunakan nilai dari variabel.
> - Variabel function memungkinkan kita untuk menyimpan function dalam sebuah variabel dan memanggilnya dengan variabel tersebut.
>
> Berikut kode variable function :
>
> <img width="260" alt="Cuplikan layar 2024-03-19 205040" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b60d5df2-ff8b-4bf5-811f-101ff8f74573">

>
> Berikut kode penggunaan variable function :
>
> <img width="345" alt="Cuplikan layar 2024-03-19 205059" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/dbc97d78-c7d8-4143-952e-e7ef5f7de63a">

>
> #### ANONYMOUS FUNCTION
> -  Anonymous function (fungsi tanpa nama) atau juga dikenal sebagai closure, memungkinkan kita untuk membuat fungsi tanpa harus memberikannya nama.
>
> Berikut kode annonymous function :
>
> <img width="262" alt="Cuplikan layar 2024-03-19 205127" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/57cb129a-b197-47e9-b05d-71ab747ee6ed">
>
> Berikut kode anonymous function sebagai argument :
> 
> <img width="382" alt="Cuplikan layar 2024-03-19 205234" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/8c28c0df-f15f-4528-b109-f11a4d4c5502">

>
> #### MENGAKSES VARIABLE DILUAR CLOSURE
> - Penjelasan tentang penggunaan use untuk mengakses variabel di luar closure atau Anonymous function.
>
> Berikut kode mengakses variable diluar :
>
> <img width="416" alt="Cuplikan layar 2024-03-19 205302" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/958a6f71-b9ef-46d5-b24c-86f5abe306d2">

>
> #### ARROW FUNCTION
> - Pengenalan tentang Arrow Function (Eropa Function) di PHP 7.4.
> - Perbandingan antara Anonymous Function dan Arrow Function dalam penggunaan sederhana.
>
> Berikut kode arrow function :
>
> <img width="505" alt="Cuplikan layar 2024-03-19 205322" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/474e9d3b-a41a-4682-9197-bd1c0d84be3c">

>
> #### CALLBACK FUNCTION
> -  Callback adalah sebuah mekanisme function memanggil function lainnya sesuai dengan yang diberikan di argument
>
> Berikut kode callback function :
>
> <img width="374" alt="Cuplikan layar 2024-03-19 205342" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/3183feaf-e042-41ce-ab47-ff1d8a056fb0">

>
> #### RECURSIVE FUNCTION
> - Recursive adalah teknik di mana sebuah fungsi memanggil dirinya sendiri.
> - Dalam recursive, perhatikan kasus dasar yang akan mengakhiri pemanggilan recursive.
>
> Berikut kode factorial loop :
>
> <img width="296" alt="Cuplikan layar 2024-03-19 205522" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/ea14135b-d201-4616-a625-47e9ab111c20">

>
> Berikut kode factorial recursive :
>
> <img width="402" alt="Cuplikan layar 2024-03-19 205537" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/1867471f-7a20-4e75-98ce-0df5bfda93e4">

>
> #### PROBLEM DENGAN RECURSIVE
> Gunakan recursive dengan hati-hati karena dapat menyebabkan masalah overflows dan konsumsi memori yang besar.
>
> Berikut kode stackOverflow :
>
> <img width="270" alt="Cuplikan layar 2024-03-19 205552" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b0c366d7-f8f7-42b0-bbb8-ccc57e2beec9"> 

---
> #### KOMENTAR
> - Komentar dalam kode program PHP penting untuk dokumentasi dan pemahaman logika.
> - Ada dua cara untuk menambahkan komentar: lebih dari satu baris menggunakan /* */, dan satu baris menggunakan //.
>
> Berikut kode komentar :
>
> <img width="268" alt="Cuplikan layar 2024-03-19 205613" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/dba85d7e-b4a9-4c63-8baa-26a8fb9ffb42"> 

---
> #### STRING FUNCTION
> - Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string.
>
> Berikut kode string function :
>
> <img width="355" alt="Cuplikan layar 2024-03-19 205631" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/885d2d97-7d5a-4a2c-ac82-b36453115f45">

>
> #### ARRAY FUNCTION
> - Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data array
>
> berikut kode array function :
>
> <img width="436" alt="Cuplikan layar 2024-03-19 205656" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/4aaff4b4-f4a7-4eed-b87f-931bb25896f5">

>
> #### IS FUNCTION
> - Function is_ pada PHP digunakan untuk mengecek tipe data variabel.
>
> Berikut kode is function :
>
> <img width="207" alt="Cuplikan layar 2024-03-19 205721" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/56aa4931-b0fc-4f97-94b3-5155866f911e">

---
> #### REQUIRE DAN INCLUDE
> - require dan include digunakan untuk mengambil file PHP lain dalam aplikasi, dengan perbedaan bahwa require akan menyebabkan error dan menghentikan program jika file tidak ditemukan, sedangkan include hanya memberikan peringatan tetapi program tetap berlanjut.
> - Menggunakan include_once atau require_once memastikan bahwa file yang sama hanya diambil sekali untuk menghindari redeclare function error.
>
> Berikut kode include :
>
> <img width="239" alt="Cuplikan layar 2024-03-19 205740" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/9f2d0109-ff14-4e27-9b7e-103e28a21572">

---
> #### VARIABLE SCOPE
> - Variabel di PHP memiliki tiga jenis scope: Global, Lokal, dan Static.
>
> Berikut kode variable global :
>
> <img width="268" alt="Cuplikan layar 2024-03-19 205758" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/2ce3dc27-23f1-4ced-bdd4-f73b6ce7a520">

>
> #### LOCAL SCOPE
> - Variabel Lokal dideklarasikan di dalam fungsi dan hanya dapat diakses dari dalam fungsi tersebut.
>
> Berikut kode local scope :
>
> <img width="257" alt="Cuplikan layar 2024-03-19 205906" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b3dd6d46-dd6b-4014-bdc7-646ba648978d">

>
> #### STATIC SCOPE
> - Variabel Static memiliki siklus hidup yang berlanjut di antara panggilan fungsi.
>
> Berikut kode static scope :
>
> <img width="302" alt="Cuplikan layar 2024-03-19 205926" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/295248bd-b827-4b2c-aaa9-81852a702880">

---
> #### REFERENCE
> - Reference dalam PHP memungkinkan akses ke variabel yang sama dengan nama yang berbeda.
Referensi dibuat dengan menggunakan karakter &.
>
> Berikut kode assign by refrence :
>
> <img width="166" alt="Cuplikan layar 2024-03-19 205946" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/4fbb85af-a0bf-448e-9aa4-918b303386da">

>
> Berikut kode pass by refrence :
>
> <img width="226" alt="Cuplikan layar 2024-03-19 210005" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/c5eb84b7-0be4-4c21-9253-5773d7e58526">

>
> #### RETURNING REFRENCES
> - PHP mendukung returning reference, yang memungkinkan fungsi mengembalikan nilai sebagai reference.
>
> Berikut kode returning refrences :
>
> <img width="182" alt="Cuplikan layar 2024-03-19 210018" src="https://github.com/weyndraig14/belajar-php-dasar/assets/162102805/b2ffa107-6522-4ee4-b5e1-7a26389f9ede">

---
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - Mungkin agak lama untuk menghafal sebagian kodenya

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

---

> - fungsi utama PHP adalah untuk membangun situs web yang dinamis. Dengan PHP, kamu dapat membuat halaman web yang dapat berinteraksi dengan pengguna, menampilkan konten yang berubah secara real-time, dan mengakses basis data untuk mengambil atau menyimpan informasi.


































































































