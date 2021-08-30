<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stori</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/dropify/css/dropify.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="assets/images/storilogo.jpg" width="300px">
            </div>

            <div class="col-md-12 text-center">
                <form enctype="multipart/form-data" id="uploadFile" method="POST" action="libs/uploadFile.php">
                    <label for="input-file-now">Upload your file</label>
                    <input type="file" id="input-file-now" name="file" class="dropify"  accept=".csv"  />
                    <button class="btn btn-success" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="plugins/dropify/js/dropify.min.js"></script>


</body>
</html>