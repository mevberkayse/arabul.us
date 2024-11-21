<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//cdn.arabul.us/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.arabul.us/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/step_7_8.css">
</head>

<body>
    <!-- Geri Tuşu ve Logo -->
    <div class="header d-flex align-items-center w-100 mb-4">
        <button class="back-button btn p-0 me-3">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </button>
        <h2>Logo</h2>
    </div>
    <div class="steps d-flex justify-content-center mb-4">
        <span class="step-circle1"></span>
        <span class="step-circle2"></span>
        <span class="step-circle3"></span>
        <span class="step-circle4"></span>
        <span class="step-circle"></span>
    </div>
    <div class="container d-flex flex-column align-items-center mt-5" style="max-width: 600px;">
        <div class="border p-3 my-3 w-100">
            <div class="d-flex justify-content-between align-items-center">
                <span>Seçilen Kategori</span>
                <a href="#" class="text-primary">Değiştir</a>
            </div>
            <div class="mt-2">
                <strong>Telefon</strong>
            </div>
        </div>
        <!-- Model Başlığı -->
        <div class="mb-3 w-100">
            <label for="model" class="form-label">Model</label>
            <div class="input-group">
                <input type="text" id="model-sec" class="form-control" placeholder="Seçiniz.." readonly
                    data-bs-toggle="modal" data-bs-target="#modelModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#modelModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none;">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>

        </div>

        <div class="mb-3 w-100">
            <label for="hafiza" class="form-label">Hafıza</label>
            <div class="input-group">
                <input type="text" id="hafiza-sec" class="form-control" placeholder="Seçiniz.." readonly
                    data-bs-toggle="modal" data-bs-target="#hafizaModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#hafizaModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-left: none; ">
                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                </span>
            </div>
        </div>

        <!-- Garanti Başlığı -->
        <div class="mb-3 w-100">
            <label for="garanti" class="form-label">Garanti</label>
            <div class="input-group">
                <input type="text" id="garanti-sec" class="form-control" placeholder="Seçiniz.." readonly
                    data-bs-toggle="modal" data-bs-target="#garantiModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <!-- Sağ kenarlık kaldırıldı -->
                <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#garantiModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; border-left: none; cursor: pointer;">
                    <!-- Sol kenarlık kaldırıldı -->
                    <i class="fa fa-chevron-right" aria-hidden="true" style="color: #000;"></i>
                    <!-- Ok rengi siyah yapıldı -->
                </span>
            </div>
        </div>
        <!-- Renk Başlığı -->
        <div class="mb-3 w-100">
            <label for="renk" class="form-label">Renk</label>
            <div class="input-group">
                <input type="text" id="renk-sec" class="form-control" placeholder="Seçiniz.." readonly
                    data-bs-toggle="modal" data-bs-target="#renkModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <!-- Sağ kenarlık kaldırıldı -->
                <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#renkModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; border-left: none; cursor: pointer;">
                    <!-- Sol kenarlık kaldırıldı -->
                    <i class="fa fa-chevron-right" aria-hidden="true" style="color: #000;"></i>
                    <!-- Ok rengi siyah yapıldı -->
                </span>
            </div>
        </div>


        <!-- Durum Başlığı -->
        <div class="mb-3 w-100">
            <label for="durum" class="form-label">Durum</label>
            <div class="input-group">
                <input type="text" id="durum-sec" class="form-control" placeholder="Seçiniz.." readonly
                    data-bs-toggle="modal" data-bs-target="#durumModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; cursor: pointer; border-right: none;">
                <!-- Sağ kenarlık kaldırıldı -->
                <span class="input-group-text" data-bs-toggle="modal" data-bs-target="#durumModal"
                    style="background-color: #f8f9fa; border: 1px solid #ced4da; border-left: none; cursor: pointer;">
                    <!-- Sol kenarlık kaldırıldı -->
                    <i class="fa fa-chevron-right" aria-hidden="true" style="color: #000;"></i>
                    <!-- Ok rengi siyah yapıldı -->
                </span>
            </div>
        </div>

    </div>

    <!-- Devam Et Butonu -->
    <div class="text-center mt-5">
        <button class="btn btn-outline-custom mt-5 w-25">Devam Et</button>
    </div>

    <!-- Modal (Renk Dropdown) -->
    <div class="modal fade" id="renkModal" tabindex="-1" aria-labelledby="renkModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="renkModalLabel">Renk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="renkList">
                        <li class="list-group-item" onclick="renkSec('Siyah')">Siyah</li>
                        <li class="list-group-item" onclick="renkSec('Beyaz')">Beyaz</li>
                        <li class="list-group-item" onclick="renkSec('Mavi')">Mavi</li>
                        <li class="list-group-item" onclick="renkSec('Yeşil')">Yeşil</li>
                        <li class="list-group-item" onclick="renkSec('Pembe')">Pembe</li>
                        <li class="list-group-item" onclick="renkSec('Kırmızı')">Kırmızı</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Model Dropdown) -->
    <div class="modal fade" id="modelModal" tabindex="-1" aria-labelledby="modelModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelModalLabel">Model</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="modelList">
                        <li class="list-group-item" onclick="modelSec('Model A')">Model A</li>
                        <li class="list-group-item" onclick="modelSec('Model B')">Model B</li>
                        <li class="list-group-item" onclick="modelSec('Model C')">Model C</li>
                        <li class="list-group-item" onclick="modelSec('Model D')">Model D</li>
                        <li class="list-group-item" onclick="modelSec('Model E')">Model E</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal (Hafıza Dropdown) -->
    <div class="modal fade" id="hafizaModal" tabindex="-1" aria-labelledby="hafizaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="hafizaModalLabel">Hafıza</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="hafizaList">
                        <li class="list-group-item" onclick="hafizaSec('Hafiza A')">Hafıza A</li>
                        <li class="list-group-item" onclick="hafizaSec('Hafiza B')">Hafıza B</li>
                        <li class="list-group-item" onclick="hafizaSec('Hafiza C')">Hafıza C</li>
                        <li class="list-group-item" onclick="hafizaSec('Hafiza D')">Hafıza D</li>
                        <li class="list-group-item" onclick="hafizaSec('Hafiza E')">Hafıza E</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal (Garanti Dropdown) -->
    <div class="modal fade" id="garantiModal" tabindex="-1" aria-labelledby="garantiModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="garantiModalLabel">Garanti</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="garantiList">
                        <li class="list-group-item" onclick="garantiSec('Garanti A')">Garanti A</li>
                        <li class="list-group-item" onclick="garantiSec('Garanti B')">Garanti B</li>
                        <li class="list-group-item" onclick="garantiSec('Garanti C')">Garanti C</li>
                        <li class="list-group-item" onclick="garantiSec('Garanti D')">Garanti D</li>
                        <li class="list-group-item" onclick="garantiSec('Garanti E')">Garanti E</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal (Durum Dropdown) -->
    <div class="modal fade" id="durumModal" tabindex="-1" aria-labelledby="durumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="durumModalLabel">Garanti</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group" id="durumList">
                        <li class="list-group-item" onclick="durumSec('Durum A')">Durum A</li>
                        <li class="list-group-item" onclick="durumSec('Durum A')">Durum A</li>
                        <li class="list-group-item" onclick="durumSec('Durum A')">Durum A</li>
                        <li class="list-group-item" onclick="durumSec('Durum A')">Durum A</li>
                        <li class="list-group-item" onclick="durumSec('Durum A')">Durum A</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        function renkSec(renk) {
            // Seçilen rengi input alanına yaz
            document.getElementById("renk-sec").value = renk;
            // Modal'ı kapat
            const modal = bootstrap.Modal.getInstance(document.getElementById('renkModal'));
            modal.hide();
        }
        function modelSec(model) {
            document.getElementById('model-sec').value = model; // Seçilen model input'a yazılıyor
            var modal = bootstrap.Modal.getInstance(document.getElementById('modelModal'));
            modal.hide(); // Modal kapatılıyor
        }
        function hafizaSec(hafiza) {
            // Hafıza kutusuna seçilen değeri yaz
            document.getElementById('hafiza-sec').value = hafiza;

            // Modalı kapat
            const modal = bootstrap.Modal.getInstance(document.getElementById('hafizaModal'));
            modal.hide()
        }
        function garantiSec(garanti) {
            // Hafıza kutusuna seçilen değeri yaz
            document.getElementById('garanti-sec').value = garanti;

            // Modalı kapat
            const modal = bootstrap.Modal.getInstance(document.getElementById('garantiModal'));
            modal.hide()
        }
        function durumSec(durum) {
            // Hafıza kutusuna seçilen değeri yaz
            document.getElementById('durum-sec').value = durum;

            // Modalı kapat
            const modal = bootstrap.Modal.getInstance(document.getElementById('durumModal'));
            modal.hide()
        }
    </script>
    <script src="//cdn.arabul.us/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.arabul.us/fontawesome/js/all.min.js"></script>
</body>

</html>