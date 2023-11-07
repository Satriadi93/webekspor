var newpage ="";

window.addEventListener('scroll', function() {
    var navbar = document.getElementById('NavbarTwo');
    var scrollPosition = window.scrollY;

    if (scrollPosition > 0.1 * window.innerHeight) {
      navbar.classList.remove('text-primary');
      navbar.classList.add('text-white');
    } else {
      navbar.classList.remove('text-white');
      navbar.classList.add('text-primary');
    }
});

function loadContent(page) {
    var xhttp = new XMLHttpRequest();
    newpage = page;
    xhttp.onreadystatechange = function() {
        console.log(this.responseText)
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", page + ".php", true);
    xhttp.send();
}

function submitForm(event) {
    event.preventDefault();

    var formData = new FormData(event.target);
    formData.append('action', 'tambah data');
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText);
                Swal.fire('Data berhasil disimpan');
                loadContent(newpage);
            } else {
                console.error('Error saving data:', this.status, this.statusText);
            }
        }
    };

    xhttp.open("POST", "simpanData.php", true);
    xhttp.send(formData);
}
function submitFormUpdate(event) {
    event.preventDefault();

    var formData = new FormData(event.target);
    formData.append('action', 'update data');
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText);
                Swal.fire('Data berhasil disimpan');
                loadContent(newpage);
            } else {
                
                console.error('Error saving data:', this.status, this.statusText);
            }
        }
    };

    xhttp.open("POST", "simpanData.php", true);
    xhttp.send(formData);
}

function FormUpdatePost(event) {
    event.preventDefault();

    var formData = new FormData(event.target);
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText);
                Swal.fire({
                    title: 'Data berhasil diubah',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'posts.php';
                    }
                });
            } else {
                console.error('Error saving data:', this.status, this.statusText);
            }
        }
    };

    xhttp.open("POST", "simpanData.php", true);
    xhttp.send(formData);
    
}
function FormNews(event) {
    event.preventDefault();
    var formData = new FormData(event.target);
    var xhttp = new XMLHttpRequest();
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                console.log(this.responseText);
                Swal.fire({
                    title: 'berita berhasil disimpan',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'berita.php';
                    }
                });
            } else {
                console.error('Error saving data:', this.status, this.statusText);
            }
        }
    };

    xhttp.open("POST", "simpanData.php", true);
    xhttp.send(formData);
}

function ubahDataAdmin(event) {
    event.preventDefault();
    var pwbaru = document.getElementById("passwordbaru").value;
    var konfirmasipw = document.getElementById("konfirmasipassword").value;
    if(pwbaru === konfirmasipw){
        var formData = new FormData(event.target);
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
                if (this.status == 200) {
                    console.log(this.responseText);
                    Swal.fire({
                        title: 'data berhasil disimpan',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'setting.php';
                        }
                    });
                } else {
                    console.error('Error saving data:', this.status, this.statusText);
                }
            }
        };

        xhttp.open("POST", "simpanData.php", true);
        xhttp.send(formData);
    }else{
        Swal.fire({
            title: 'Konfirmasi password salah',
            icon: 'failed',
            showCancelButton: false,
            confirmButtonText: 'OK'
        })
    }
    
    
}

function loadModalContent(id) {
    document.getElementById('idUpdate').value = id;
    document.getElementById('bulanUpdate').value = document.getElementById('bulan'+id).textContent;
    document.getElementById('bulankeUpdate').value = document.getElementById('x1'+id).textContent;
    document.getElementById('perayaanUpdate').value = document.getElementById('x2'+id).textContent;
    document.getElementById('hargaUpdate').value = document.getElementById('y'+id).textContent;
}

function loadUpdatePost1(section) { 
    document.getElementById('section').value = section;
    document.getElementById('exampleModalLabel').textContent = 'Ubah postingan '+section;
    document.getElementById('title').value = document.getElementById('title_'+section).textContent;
    document.getElementById('description').value = document.getElementById('description_'+section).textContent;
}

function loadUpdatePost2(section) { 
    document.getElementById('section2').value = section;
    document.getElementById('exampleModalLabel2').textContent = 'Ubah data '+section;
    document.getElementById('calories').value = document.getElementById('calories_'+section).textContent;
    document.getElementById('total_fat').value = document.getElementById('total_fat_'+section).textContent;
    document.getElementById('sodium').value = document.getElementById('sodium_'+section).textContent;
    document.getElementById('protein').value = document.getElementById('protein_'+section).textContent;
    document.getElementById('price').value = document.getElementById('price_'+section).textContent;
    document.getElementById('prediksi_harga').value = document.getElementById('prediksi_harga_'+section).textContent;
}

function loadUpdateNews(id) { 
    document.getElementById('id').value = id;
    document.getElementById('img').value = document.getElementById('img_'+id).textContent;
    document.getElementById('title').value = document.getElementById('title_'+id).textContent;
    document.getElementById('description').value = document.getElementById('description_'+id).textContent;
}

async function hapusData(id, page) {
    var confir = await comfirmation();
    console.log(confir);

    if (confir === "hapus") {
            var xhttp = new XMLHttpRequest();
    
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        console.log(this.responseText);
                        loadContent(newpage);
                    } else {
                        console.error('Error menghapus data:', this.status, this.statusText);
                    }
                }
            };
    
            xhttp.open("POST", "simpanData.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id + "&halaman=" + page + "&action=" + "hapus data");
    }
}
async function hapusBerita(id) {
    var confir = await comfirmation();
    console.log(confir);

    if (confir === "hapus") {
            var xhttp = new XMLHttpRequest();
    
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        console.log(this.responseText);
                        Swal.fire({
                            title: 'berita berhasil disimpan',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'berita.php';
                            }
                        });
                    } else {
                        console.error('Error menghapus data:', this.status, this.statusText);
                    }
                }
            };
    
            xhttp.open("POST", "simpanData.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("id=" + id + "&action=" + "hapus berita");
            
    }
}

async function comfirmation() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success mx-1',
            cancelButton: 'btn btn-danger mx-1'
        },
        buttonsStyling: false
    });

    const result = await swalWithBootstrapButtons.fire({
        title: 'Apakah  anda yakin?',
        text: "Anda akan menghapus data ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: ' Yes ',
        cancelButtonText: ' No ' ,
        reverseButtons: true
    });

    if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
            'Terhapus!',
            'Data telah terhapus',
            'success'
          )
        return "hapus";
    } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
            'Batal',
            'Data tidak terhapus'
        )
        return "batal";
    }
}

function mode(mode){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            Swal.fire('mode perhitungan dirubah');
            loadContent(newpage);
        }
    };
    xhttp.open("POST", "simpanData.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("mode=" + mode + "&action=" + "ubah mode");
}

function hitung() {
    var a = parseFloat(document.getElementById("a").value);
    var b1 = parseFloat(document.getElementById("b1").value);
    var b2 = parseFloat(document.getElementById("b2").value);
    var x1 = parseFloat(document.getElementById("x1").value);
    var x2 = parseFloat(document.getElementById("x2").value);

    if (!isNaN(a) && !isNaN(b1) && !isNaN(b2) && !isNaN(x1) && !isNaN(x2)) {
        var hasil = a + ( b1 * x1) + (b2 * x2); 
        document.getElementById("hasil").innerHTML = hasil;
    }
}

function simpanHasil(halaman) {
    var a = parseFloat(document.getElementById("a").value);
    var b1 = parseFloat(document.getElementById("b1").value);
    var b2 = parseFloat(document.getElementById("b2").value);
    var x1 = parseFloat(document.getElementById("x1").value);
    var x2 = parseFloat(document.getElementById("x2").value);
    var hasil = document.getElementById("hasil").textContent;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            Swal.fire('Data berhasil disimpan');
            loadContent(newpage);
        }
    };

    xhttp.open("POST", "simpanData.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("hasil=" + hasil + "&x1=" + x1 + "&x2=" + x2 + "&halaman=" + halaman +
                "&a=" + a+ "&b1=" + b1+ "&b2=" + b2 + "&action=" + "simpan hasil");
}

function logout(){
    var xhttp = new XMLHttpRequest;
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            Swal.fire('Anda berhasil keluar');
        }
    };

    xhttp.open("POST", "simpanData.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("action=" + "logout");
}


