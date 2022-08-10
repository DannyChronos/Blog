
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amaranth:400,400i,700,700i">
    <div class="col-md-8 col-xl-6 yosh" id="myForm">
            <h2 class="text-center" style="font-family: Amaranth, sans-serif;">Creez votre poste</h2>
            <hr>
            <form style="font-family: Amaranth, sans-serif;" method="post" enctype="multipart/form-data">
                <div class="form-group"><input class="form-control" type="text" placeholder="Title" name="title"></div>
                <div class="form-group"><input class="form-control" type="text" placeholder="Subtitle" name="subtitle"></div>
                <div class="form-group"><input type="file" name="img"></div>
                <div class="form-group"><textarea class="form-control" style="height: 200px;" placeholder="Contenu" name="body" rows="20"></textarea></div>
                <div class="form-group">
                    <div class="btn-group" role="group" style="width: 200px;"><button class="btn btn-primary buton1" type="submit" style="background-color: rgb(0,126,28);" name="button">Valider</button><button class="btn btn-primary buton1" type="button" onclick="closeForm()" style="margin-left: 2%;background-color: rgb(255,0,0);">Annuler</button></div>
                </div>
            </form>
        </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>

<script src="assets/js/popup.js"></script>