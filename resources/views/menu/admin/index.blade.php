@extends('adminLayout')

@section('content')
<!-- <div id="kontentUtama">halaman menu</div>
<button id="aksi">Ganti Text</button> -->

<div class="box">
    <div class="box-header">
        <button id="aksiTambah" class="btn btn-primary">Tambah Item</button>
    </div>
    <div class="box-body">
        
         <table class="table" id="bodyTable"> 
        <tbody>
            <tr>
            <th>ID</th>
            <th>Nama Menu</th>
            <th>Aksi</th>
            </tr>
        </tbody>
        </table>
    </div>
</div>


@endsection('content')

@section('klinik_sambal_js')
<script>
    //paling banyak dipakai
    //dom manipulation
    //ajax 
    //event (click, hover, key up, key down)


        // var kontentUtama;
        // kontentUtama = document.getElementById("kontentUtama");
        // kontentUtama.innerHtml = "test ganti";

        // //contoh event
        // var tombolAksi= document.getElementById("aksi");
        // tombolAksi.addEventListener("click", function(){
        //     kontentUtama.innerHTML ="test ganti menggunakan tombol";
        // });

    var tombolTambah = document.getElementById("aksiTambah");
    var bodyTable = document.getElementById("bodyTable");

    var counter=1;    
    tombolTambah.addEventListener("click", function(){

        var tombolHapus ='<button id="aksi-'+counter+'" class= "btn btn-danger">Hapus</button>';
        var itemBaru = '<tr id="row-'+counter+'"><td>'+counter+'</td><td>Test Nama Menu</td><td>'+tombolHapus+'</td></tr>';
        
        bodyTable.insertAdjacentHTML("beforeend",itemBaru);
        
        var tombolHapus = document.getElementById("aksi-"+counter);
        var rowNumber = counter;
        tombolHapus.addEventListener("click",function(){
            var row = document.getElementById("row-"+rowNumber);
            row.remove();
        
        });
        counter +=1;
        
    });

    function tampilkanData(data){
        for(let i=0;i<=data.documents.length;i++){
            let d =data.documents[i];
            console.log("Jenis:", d.fields.jenis.stringValue);
            console.log("harga: ", d.fields.harga.integerValue);

            var tombolHapus ='<button id="aksi-'+counter+'" class= "btn btn-danger">Hapus</button>';
            var itemBaru = '<tr id="row-'+counter+'"><td>'+counter+'</td><td>'+d.fields.jenis.stringValue+'</td><td>'+tombolHapus+'</td></tr>';
        
        bodyTable.insertAdjacentHTML("beforeend",itemBaru);
         }
    }

        // jquery.get("https://api.github.com/users/yogakristama",tampilkanData);

        //firebase
        var url= "https://firestore.googleapis.com/v1beta1/projects/kliniksambal-b4eb6/databases/(default)/documents/sambal?key=AIzaSyCRqpI4lH1gaAvDMWsP5UsFw7TICFbUPoI"

        jQuery.get(url, tampilkanData); 

</script>

@endsection('klinik_sambal_js')