<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 fixed-top shadow sm">
            <div class="container">
                <a href="./index.php" class="navbar-brand font-weight-bold">
                    <img src="g.jpg" width="30" height="30" alt="" class="d-inline-block align-top mr-1">
                    Sunflower Book
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <form action="pencarian.php" method="POST" class="ml-auto mt-3">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <input type="submit" name="submit" value="Cari" class="btn btn-outline-primary">
                        </div>
                        <input type="text" class="form-control" name="kunci" placeholder="Masukan nama / kategori . . ." required autocomplete="off">
                    </div>
                  </form>
                </div>
            </div>
        </nav>
    </header>