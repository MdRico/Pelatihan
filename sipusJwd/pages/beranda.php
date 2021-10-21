<style>
.column {
  float: left;
  width: 25%;
  padding: 0px;
  margin-top: 45px;
}

.column img {
  opacity: 0.8;
  cursor: pointer;
}

.column img:hover {
  opacity: 1;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.container {
  position: relative;
  display: none;
}

#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}

</style>


<div id="label-page" style = "text-align : center ; border : 0; display : inline-table">
	<image id="logo-perpustakaan" src="images/buku.png" style="border:0; text-decoration:none; outline:none"> 
</div>
<div id="content" style = "background-color : #f0f4f4; text-align : center">
	<div id="beranda-judul" style = "background-color : #f0f4f4; text-align : center">
		<h1>SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN TELKOM</h1>

<div id="fluid-container" style = "text-align : center" >
<div class="row" style = "text-align : center">
  <div class="column">
    <img src="images/buku.png" width="200" height="100" alt="Nature" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/buku2.png" width="200" height="100" alt="Snow" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/buku3.png" width="200" height="100" alt="Mountains" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/buku4.png" width="200" height="100" alt="Lights" onclick="myFunction(this);">
  </div>
</div>

	<div class="container">
  		<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  		<img id="expandedImg" style="width:100%">
  		<div id="imgtext"></div>
	</div>
</div>

	</div>
	<div id="beranda-konten">
		<h2> "MEMBACA ADALAH JENDELA DUNIA" </h2>
	</div>

<script>	
  function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>

</div>