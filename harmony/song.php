<?php
// membuat instance
$datasong=NEW Song;
// aksi tampil data
if($_GET['aksi']=='tampil'){
// aksi untuk tampil data
$html = null;
$html .='<h3>Song <span>List</span></h3>';
$html .='<div class="add"><a href="index.php?file=song&aksi=tambah" class="addsong">Add Song<a>
<a class="addsong" onclick="printFunction()">Print</a></div>';
$html .='<table border="1" width="100%">
<thead>
<th>No.</th>
<th>Code song</th>
    <th>Title</th>
    <th>Artist</th>
    <th>Album</th>
    <th>Audio</th>
<th>Action</th>
</thead>
<tbody>';
// variabel $data menyimpan hasil return
$data = $datasong->tampil();
$no=null;
if(isset($data)){
foreach($data as $barisSong){
$no++;
$html .='<tr>
<td>'.$no.'</td>
<td>'.$barisSong->CodeSong.'</td>
<td>'.$barisSong->Title.'</td>
<td>'.$barisSong->Artist.'</td>
<td>'.$barisSong->Album.'</td>
<td><audio controls src="song/'.$barisSong->Audio.'" type="audio/mpeg></audio>"</td>

<td>
<a href="index.php?file=song&aksi=edit&codesong='.$barisSong->CodeSong.'"><i class="bx bx-edit-alt"></i></a>
<a href="index.php?file=song&aksi=hapus&codesong='.$barisSong->CodeSong.'"><i class="bx bx-trash-alt"></i></a>
</td>
</tr>';
}
}
$html .='</tbody>
</table>';
echo $html;
}
// aksi tambah data
else if ($_GET['aksi']=='tambah') {
$html =null;
$html .='<h3>Add <span>Song</span></h3>';
$html .='<br/>'; 
$html .='<form method="POST" action="index.php?file=song&aksi=simpan">';
$html .='<p>Code<br/>';
$html .='<br/>'; 
$html .='<input type="text" name="txtCode" placeholder="Enter code for the song" size="70" autofocus/></p>';
$html .='<p>Title<br/>';
$html .='<br/>'; 
$html .='<input type="text" name="txtTitle" placeholder="Enter the song title" size="70" required/></p>';
$html .='<p>Artist<br/>';
$html .='<br/>'; 
$html .='<input type="text" name="txtArtist" placeholder="Enter the song artist" size="70" required/>';
$html .='<p>Album<br/>';
$html .='<br/>'; 
$html .='<input type="text" name="txtAlbum" placeholder="Enter the song album" size="70" required/>';
$html .='<p>Audio<br/>';
$html .='<br/>'; 
$html .='<input type="file" name="audioFiles" id="audio">';
$html .='<p><button type="submit" name="savebutton" value="Save">Save</button></p>';
$html .='</form>';
echo $html;
}
// aksi tambah data
else if ($_GET['aksi']=='simpan') {
$data=array(
    'CodeSong'=>$_POST['txtCode'],
    'Title'=>$_POST['txtTitle'],
    'Artist'=>$_POST['txtArtist'],
    'Album'=>$_POST['txtAlbum'],
    'Audio'=>$_POST['audioFiles']
);
// simpan siswa dengan menjalankan method simpan

// $datasong ubah jadi $dataBuku, dan $song ubah jadi $buku
$datasong->simpan($data);
echo '<meta http-equiv="refresh" content="0;
url=index.php?file=song&aksi=tampil">';
}
// aksi tambah data
else if ($_GET['aksi']=='edit') {
// ambil data siswa
$song=$datasong->detail($_GET['codesong']);
    $html =null;
    $html .='<h3>Edit Song</h3>';
$html .='<form method="POST"
action="index.php?file=song&aksi=update">';
$html .='<p>Code<br/>';
$html .='<input type="text" name="txtCode"
value="'.$song->CodeSong.'" placeholder="Enter code for the song"
readonly/></p>';
$html .='<p>Title<br/>';
$html .='<input type="text" name="txtTitle"
value="'.$song->Title.'" placeholder="Enter the song title"
size="70" required autofocus/></p>';
$html .='<p>Artist<br/>';
$html .='<input type="text" name="txtArtist"
value="'.$song->Artist.'" placeholder="Enter the song artist" size="70" required/>,';
$html .='<p>Album<br/>';
$html .='<input type="text" name="txtAlbum"
value="'.$song->Album.'" placeholder="Enter the song artist" size="70" required/>,';
$html .='<p>Audio<br/>';
$html .='<input type="file" name="audioFiles" value="'.$song->Audio.'"></p>';
$html .='<p><button type="submit" name="savebutton" value="Save">Save</button></p>';
$html .='</form>';
    echo $html;
    }
    // aksi tambah data
    else if ($_GET['aksi']=='update') {
    $data=array(
        'Title'=>$_POST['txtTitle'],
        'Artist'=>$_POST['txtArtist'],
        'Album'=>$_POST['txtAlbum'],
        'Audio'=>$_POST['audioFiles']
);
$datasong->update($_POST['txtCode'],$data);
echo '<meta http-equiv="refresh" content="0;
url=index.php?file=song&aksi=tampil">';

}
// aksi tambah data
else if ($_GET['aksi']=='hapus') {
$datasong->hapus($_GET['codesong']);
echo '<meta http-equiv="refresh" content="0;
url=index.php?file=song&aksi=tampil">';
}
// aksi tidak terdaftar
else {
echo '<p>Error 404 : Halaman tidak ditemukan !</p>';
}
?>