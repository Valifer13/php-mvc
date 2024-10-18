<?php 

class About {
    public function index($nama = "Guest", $pekerjaan = "Jobless") {
        echo "Hallo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page() {
        echo "Hello from about/page";
    }
}