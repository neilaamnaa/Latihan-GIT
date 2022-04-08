<section>
	<h1> <?php echo $judul ?> </h1>
	<p align="justify"> Pada pengertian codeigniter di atas tadi dielaskan bahwa codeigniter menggunakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh belaar codeigniter.</p>
	<p>MVC adalah teknik atau konsep yang memisahkan komponen utama menjadi tiga komponen yaitu model, view, dan contoller.</p>
	<ol type="a">
		<li>Model</li>
		<p align="justiy">Model adalah kelas yang merepresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat dideinisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database. Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. Semua instruksi atau ungsi yang berhubungan dengan pengolahan database diletakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingakaran, maka dapat memodelkan objek lingkaran sebagai kelas model.</p>
		<p align="justiy">Sebagai catatan, semua model harus disimpan di dalam older applicaation/models.</p>
		<li>View</li>
		<p align="justiy">View merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user(pada browser). Tampilan dari user intyerface dikumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halam website.</p>
		<li>Controller</li>
		<p align="justiy">Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database (model) diambil oleh controller dan kemudian controller pula yang menampilkannya ke view. Jadi controller lah yang mengolah instruksi.</p>
		<p align="justiy">Dari penjelasan tentang model, view, dan controller di atas dapat disimpulkan bahwa controller sebagai penghbung view dan model. Misalnya pada aolikasi yang menampilkan data dengan menggunakan metode konsep MVC, controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan sangat mudah dalam mengembangkan aplikasi dengan MVC ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan dengan view untuk mendesign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.</p>
			
</section>