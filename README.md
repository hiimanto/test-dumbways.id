# test-dumbways.id

1. Tuliskan sebuah method untuk me-return biodata Anda, seperti nama, alamat, hobi, skills dsb. Gunakan bahasa apapun yang Anda kuasai!

2. Buatlah layout sederhana dengan html dan css yang isinya terdapat header, body, footer. Di dalam body tambahkan table dengan data: no, nama lengkap, telp, dan alamat

3. Sebuah blog mempunyai table sbb:
- users: id, username
- posts: id, title, content, createdBy (FK users.id)
- comments: id, comment, postId (FK posts.id)

buatlah query MYSQL untuk menampilkan data sebagai berikut

posts.title, posts.users.username, dan comments

ex:
- posts.title: wanita itu diserang kadal saat mengunjungi kebun binatang
- posts.users.username: dibuat oleh Hesa Suryana
- comments:
  - ah masa
  - serius?
  - bonbin mana?

4. buatlah layout sederhana menggunakan twitter bootstrap yang terdiri dari header, sidebar, dan body dengan isi table. Hampir mirip dengan task #2

5. Dari layout soal #3, dan #4, fetch data yang tadi sudah dibuat ke table body pada tampilan bootstrap Anda. Catatan: Jika Anda belum bisa mengerjakan soal #3, maka gunakan query sederhana saja. Bahasa pemrograman yg digunakan silakan gunakan apapun yang Anda kuasai.

6. Tuliskan semua jawaban di atas ke dalam github. Kirim jawaban berupa github link ke telegram saya di +62 8564 1278 479

7. Pertanyaan BONUS:

Anda ditunjuk sebagai CEO di suatu perusahaan yg based productnya adalah sabun batang. Mereka mempunyai kendala dengan mesin produksinya, yang mana mesinnya sometime tidak mengisikan sabun ke kardus, sehingga mengakibatkan ada beberapa kotak sabun yang kosong (BUG). Bagaimanakah cara Anda sebagai CEO untuk mengatasi problem tersebut?

a. Menambah SDM untuk melakukan pengecekan
b. Membuat AI (robot/mesin) untuk melakukan pengecekan
c. Memperbaiki BUG mesin produksi
d. Mengganti mesin produksi dengan membeli mesin produksi baru
e. jawaban lain, silakan isi ......