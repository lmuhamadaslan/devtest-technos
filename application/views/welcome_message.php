<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Dev Test</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		min-height: 96px;
	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	table, th, td {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 6px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Dev Test!</h1>

	<div id="body">
		<p>Tes ini ditujukan untuk mengetahui seberapa cepat kandidat dapat belajar dan melakukan problem solving.</p>
		<hr>
		<p>Test 1</p>
		<code>
			<b>Problem : </b><br>

			Silahkan melakukan perulangan angka dari 1 - 100<br>
			jika angka tersebut merupakan kelipatan 2 , maka cetak nilai "Fizz"<br>
			jika angka tersebut merupakan kelipatan 3 , maka cetak nilai "Buzz"<br>
			jika angka bukan kelipatan 2 & 3, maka cetak angka tersebut<hr>

			<b>Example Result :</b>
			1, Fizz, Buzz, Fizz, 5, Fizz, 7, Fizz, Buzz, Fizz, 11, Fizz, 13, Fizz, Buzz, Fizz, 17, Fizz, 19, Fizz, Buzz, Fizz, 23, Fizz, 25, Fizz, Buzz, Fizz, 29, Fizz, 31, Fizz, Buzz, Fizz, 35, Fizz, 37, Fizz, Buzz, Fizz, 41, Fizz, 43, Fizz, Buzz, Fizz, 47, Fizz, 49, Fizz, Buzz, Fizz, 53, Fizz, 55, Fizz, Buzz, Fizz, 59, Fizz, 61, Fizz, Buzz, Fizz, 65, Fizz, 67, Fizz, Buzz, Fizz, 71, Fizz, 73, Fizz, Buzz, Fizz, 77, Fizz, 79, Fizz, Buzz, Fizz, 83, Fizz, 85, Fizz, Buzz, Fizz, 89, Fizz, 91, Fizz, Buzz, Fizz, 95, Fizz, 97, Fizz, Buzz, Fizz,<br><br>
			
			<b>Notes:</b><br>
			Silahkan koding pada controller fizzbuzz pada file ini

		</code>

		<p>Test 2</p>
		<code>
			<b>Problem : </b><br>
			Palindrome adalah kondisi dimana sebuah kata akan sama walau dibaca dari depan dan belakang<br>
			Buatlah list kata seperti :<br>
			Aku, KaMu , MalAm , isi, 'string kosong' <hr>
			Jika sebuah kata sama walau dibaca dari depan dan belakang, maka kata itu adalah palindrome,<br>
			Jika sebuah kata tidak sama dibcaca dari depan dan belakang, maka kata itu  bukan palindrome,<br>
			Jika sebuah kata adalah string kosong , maka bukan palindrome<br>

			<b>Example Result :</b><br>

				Aku bukan palindrome ,
				KaMu bukan palindrome ,
				MalAm adalah palindrome ,
				isi adalah palindrome ,
				bukan palindrome ,<br>

			<br>
			<b>Notes:</b><br>
			Silahkan koding pada controller palindrome pada file ini
		</code>

		<p>Test 3</p>
		<code>
			<b>Problem : </b><br>
			MVC:<br>

			1. Buat sebuah database : db_devtest<br>

			2. Buatlah tabel yang menampung kategori (A,B,C) | dengan kolom {id, category}<br>
			3. Buatlah tabel yang menampung data | dengan kolom {id, data, category_id}<br>
			4. Tampilkan rekap data seperti berikut :<br>
			<table style="text-align: center;">
				<tr>
					<th>Kategori</th>
					<th>Jumlah Data</th>
				</tr>
				<tr>
					<td>A</td>
					<td>12</td>
				</tr>
				<tr>
					<td>B</td>
					<td>4</td>
				</tr>
				<tr>
					<td>C</td>
					<td>8</td>
				</tr>
			</table>

			<br><br>
			<b>Notes:</b>
			Silahkan koding pada file project ini
		</code>

		
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
